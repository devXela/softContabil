<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diretoria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diretoria->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Diretorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gerencias'), ['controller' => 'Gerencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gerencia'), ['controller' => 'Gerencias', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="diretorias form large-10 medium-9 columns">
    <?= $this->Form->create($diretoria) ?>
    <fieldset>
        <legend><?= __('Edit Diretoria') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas]);
            echo $this->Form->input('diretoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
