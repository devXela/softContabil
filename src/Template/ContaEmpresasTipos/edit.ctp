<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contaEmpresasTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresasTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas Tipos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contaEmpresasTipos form large-10 medium-9 columns">
    <?= $this->Form->create($contaEmpresasTipo) ?>
    <fieldset>
        <legend><?= __('Edit Conta Empresas Tipo') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
