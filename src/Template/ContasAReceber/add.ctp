<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contas A Receber'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Recebimentos'), ['controller' => 'FormaRecebimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Recebimento'), ['controller' => 'FormaRecebimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['controller' => 'ContaEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['controller' => 'ContaEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAReceber form large-10 medium-9 columns">
    <?= $this->Form->create($contasAReceber) ?>
    <fieldset>
        <legend><?= __('Add Contas A Receber') ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('forma_recebimento_id', ['options' => $formaRecebimentos]);
            echo $this->Form->input('conta_empresa_id', ['options' => $contaEmpresas]);
            echo $this->Form->input('numero_documento');
            echo $this->Form->input('valor_documento');
            echo $this->Form->input('valor_liquido');
            echo $this->Form->input('parcelas');
            echo $this->Form->input('retencoes._ids', ['options' => $retencoes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
