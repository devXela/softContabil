<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Fornecedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classe Fornecedores'), ['controller' => 'ClasseFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'ClasseFornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['controller' => 'CategoriaFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'CategoriaFornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fornecedores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa_id') ?></th>
            <th><?= $this->Paginator->sort('classe_fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('categoria_fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('indentificacao') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fornecedores as $fornecedor): ?>
        <tr>
            <td><?= $this->Number->format($fornecedor->id) ?></td>
            <td>
                <?= $fornecedor->has('empresa') ? $this->Html->link($fornecedor->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $fornecedor->empresa->id]) : '' ?>
            </td>
            <td>
                <?= $fornecedor->has('c') ? $this->Html->link($fornecedor->c->id, ['controller' => 'ClasseFornecedores', 'action' => 'view', $fornecedor->c->id]) : '' ?>
            </td>
            <td>
                <?= $fornecedor->has('c') ? $this->Html->link($fornecedor->c->id, ['controller' => 'CategoriaFornecedores', 'action' => 'view', $fornecedor->c->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($fornecedor->indentificacao) ?></td>
            <td><?= h($fornecedor->email) ?></td>
            <td><?= h($fornecedor->nome) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $fornecedor->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fornecedor->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fornecedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedor->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
