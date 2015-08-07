<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atividadeEmpresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atividadeEmpresa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atividade Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="atividadeEmpresas form large-10 medium-9 columns">
    <?= $this->Form->create($atividadeEmpresa) ?>
    <fieldset>
        <legend><?= __('Edit Atividade Empresa') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
