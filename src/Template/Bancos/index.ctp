<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['controller' => 'ContaEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['controller' => 'ContaEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Fornecedores'), ['controller' => 'ContaFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Fornecedore'), ['controller' => 'ContaFornecedores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="bancos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('codigo') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bancos as $banco): ?>
        <tr>
            <td><?= $this->Number->format($banco->id) ?></td>
            <td><?= $this->Number->format($banco->codigo) ?></td>
            <td><?= h($banco->nome) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $banco->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banco->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?>
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
