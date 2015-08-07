<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Clientes Telefone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientesTelefones index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('cliente_id') ?></th>
            <th><?= $this->Paginator->sort('telefone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientesTelefones as $clientesTelefone): ?>
        <tr>
            <td><?= $this->Number->format($clientesTelefone->id) ?></td>
            <td>
                <?= $clientesTelefone->has('cliente') ? $this->Html->link($clientesTelefone->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $clientesTelefone->cliente->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($clientesTelefone->telefone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $clientesTelefone->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientesTelefone->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientesTelefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesTelefone->id)]) ?>
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
