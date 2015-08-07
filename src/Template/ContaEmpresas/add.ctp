<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Conta Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas Gerentes'), ['controller' => 'ContaEmpresasGerentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresas Gerente'), ['controller' => 'ContaEmpresasGerentes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas Tipos'), ['controller' => 'ContaEmpresasTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresas Tipo'), ['controller' => 'ContaEmpresasTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contaEmpresas form large-10 medium-9 columns">
    <?= $this->Form->create($contaEmpresa) ?>
    <fieldset>
        <legend><?= __('Add Conta Empresa') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas]);
            echo $this->Form->input('banco_id', ['options' => $bancos]);
            echo $this->Form->input('conta_empresas_gerentes_id', ['options' => $contaEmpresasGerentes]);
            echo $this->Form->input('conta_empresas_tipos_id', ['options' => $contaEmpresasTipos]);
            echo $this->Form->input('nome_conta');
            echo $this->Form->input('agencia');
            echo $this->Form->input('numero_conta');
            echo $this->Form->input('limite');
            echo $this->Form->input('desconto_cartao');
            echo $this->Form->input('saldo_abertura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
