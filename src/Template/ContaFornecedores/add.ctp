<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Conta Fornecedores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contaFornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($contaFornecedore) ?>
    <fieldset>
        <legend><?= __('Add Conta Fornecedore') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id');
            echo $this->Form->input('conta');
            echo $this->Form->input('agencia');
            echo $this->Form->input('banco_id', ['options' => $bancos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
