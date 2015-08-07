<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresasEndereco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresasEndereco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Empresas Enderecos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresasEnderecos form large-10 medium-9 columns">
    <?= $this->Form->create($empresasEndereco) ?>
    <fieldset>
        <legend><?= __('Edit Empresas Endereco') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas]);
            echo $this->Form->input('rua');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cidade');
            echo $this->Form->input('cep');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
