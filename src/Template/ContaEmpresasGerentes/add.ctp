<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Conta Empresas Gerentes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contaEmpresasGerentes form large-10 medium-9 columns">
    <?= $this->Form->create($contaEmpresasGerente) ?>
    <fieldset>
        <legend><?= __('Add Conta Empresas Gerente') ?></legend>
        <?php
            echo $this->Form->input('telefone');
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
