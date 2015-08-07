<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Conta Empresas Gerente'), ['action' => 'edit', $contaEmpresasGerente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conta Empresas Gerente'), ['action' => 'delete', $contaEmpresasGerente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresasGerente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conta Empresas Gerentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Empresas Gerente'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contaEmpresasGerentes view large-10 medium-9 columns">
    <h2><?= h($contaEmpresasGerente->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($contaEmpresasGerente->nome) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($contaEmpresasGerente->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contaEmpresasGerente->id) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= $this->Number->format($contaEmpresasGerente->telefone) ?></p>
        </div>
    </div>
</div>
