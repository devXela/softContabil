<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Conta Fornecedore'), ['action' => 'edit', $contaFornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conta Fornecedore'), ['action' => 'delete', $contaFornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaFornecedore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conta Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Fornecedore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contaFornecedores view large-10 medium-9 columns">
    <h2><?= h($contaFornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Conta') ?></h6>
            <p><?= h($contaFornecedore->conta) ?></p>
            <h6 class="subheader"><?= __('Agencia') ?></h6>
            <p><?= h($contaFornecedore->agencia) ?></p>
            <h6 class="subheader"><?= __('Banco') ?></h6>
            <p><?= $contaFornecedore->has('banco') ? $this->Html->link($contaFornecedore->banco->id, ['controller' => 'Bancos', 'action' => 'view', $contaFornecedore->banco->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contaFornecedore->id) ?></p>
            <h6 class="subheader"><?= __('Fornecedor Id') ?></h6>
            <p><?= $this->Number->format($contaFornecedore->fornecedor_id) ?></p>
        </div>
    </div>
</div>
