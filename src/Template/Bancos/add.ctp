<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Bancos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['controller' => 'ContaEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['controller' => 'ContaEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Fornecedores'), ['controller' => 'ContaFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Fornecedore'), ['controller' => 'ContaFornecedores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="bancos form large-10 medium-9 columns">
    <?= $this->Form->create($banco) ?>
    <fieldset>
        <legend><?= __('Add Banco') ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
