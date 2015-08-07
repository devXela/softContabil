<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fornecedor'), ['action' => 'edit', $fornecedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fornecedor'), ['action' => 'delete', $fornecedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classe Fornecedores'), ['controller' => 'ClasseFornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classe Fornecedor'), ['controller' => 'ClasseFornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['controller' => 'CategoriaFornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Fornecedor'), ['controller' => 'CategoriaFornecedores', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fornecedores view large-10 medium-9 columns">
    <h2><?= h($fornecedor->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $fornecedor->has('empresa') ? $this->Html->link($fornecedor->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $fornecedor->empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('C') ?></h6>
            <p><?= $fornecedor->has('c') ? $this->Html->link($fornecedor->c->id, ['controller' => 'ClasseFornecedores', 'action' => 'view', $fornecedor->c->id]) : '' ?></p>
            <h6 class="subheader"><?= __('C') ?></h6>
            <p><?= $fornecedor->has('c') ? $this->Html->link($fornecedor->c->id, ['controller' => 'CategoriaFornecedores', 'action' => 'view', $fornecedor->c->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($fornecedor->email) ?></p>
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($fornecedor->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fornecedor->id) ?></p>
            <h6 class="subheader"><?= __('Indentificacao') ?></h6>
            <p><?= $this->Number->format($fornecedor->indentificacao) ?></p>
        </div>
    </div>
</div>
