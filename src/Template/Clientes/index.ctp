<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa_id') ?></th>
            <th><?= $this->Paginator->sort('categoria_clientes_id') ?></th>
            <th><?= $this->Paginator->sort('identificacao') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('responsavel') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $this->Number->format($cliente->id) ?></td>
            <td>
                <?= $cliente->has('empresa') ? $this->Html->link($cliente->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $cliente->empresa->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($cliente->categoria_clientes_id) ?></td>
            <td><?= $this->Number->format($cliente->identificacao) ?></td>
            <td><?= h($cliente->nome) ?></td>
            <td><?= h($cliente->email) ?></td>
            <td><?= h($cliente->responsavel) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
