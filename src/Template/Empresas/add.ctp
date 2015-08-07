<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atividade Empresas'), ['controller' => 'AtividadeEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividade Empresa'), ['controller' => 'AtividadeEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diretorias'), ['controller' => 'Diretorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diretoria'), ['controller' => 'Diretorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['controller' => 'FormaTrabalhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['controller' => 'FormaTrabalhos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresas form large-10 medium-9 columns">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Add Empresa') ?></legend>
        <?php
            echo $this->Form->input('atividade_empresa_id', ['options' => $atividadeEmpresas]);
            echo $this->Form->input('tipo_empresa_id');
            echo $this->Form->input('forma_tributacao_empresa_id');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('email');
            echo $this->Form->input('nome_empresa');
            echo $this->Form->input('percentual_juros');
            echo $this->Form->input('percentual_multa');
            echo $this->Form->input('forma_trabalhos._ids', ['options' => $formaTrabalhos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
