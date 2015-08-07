<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contaEmpresasGerente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresasGerente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas Gerentes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contaEmpresasGerentes form large-10 medium-9 columns">
    <?= $this->Form->create($contaEmpresasGerente) ?>
    <fieldset>
        <legend><?= __('Edit Conta Empresas Gerente') ?></legend>
        <?php
            echo $this->Form->input('telefone');
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
