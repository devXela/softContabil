<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fornecedores Telefone'), ['action' => 'edit', $fornecedoresTelefone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fornecedores Telefone'), ['action' => 'delete', $fornecedoresTelefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedoresTelefone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores Telefones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedores Telefone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fornecedoresTelefones view large-10 medium-9 columns">
    <h2><?= h($fornecedoresTelefone->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fornecedor') ?></h6>
            <p><?= $fornecedoresTelefone->has('fornecedor') ? $this->Html->link($fornecedoresTelefone->fornecedor->id, ['controller' => 'Fornecedores', 'action' => 'view', $fornecedoresTelefone->fornecedor->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fornecedoresTelefone->id) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= $this->Number->format($fornecedoresTelefone->telefone) ?></p>
        </div>
    </div>
</div>
