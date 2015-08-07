<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Clientes Endereco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientesEnderecos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('cliente_id') ?></th>
            <th><?= $this->Paginator->sort('rua') ?></th>
            <th><?= $this->Paginator->sort('numero') ?></th>
            <th><?= $this->Paginator->sort('complemento') ?></th>
            <th><?= $this->Paginator->sort('bairro') ?></th>
            <th><?= $this->Paginator->sort('cidade') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientesEnderecos as $clientesEndereco): ?>
        <tr>
            <td><?= $this->Number->format($clientesEndereco->id) ?></td>
            <td>
                <?= $clientesEndereco->has('cliente') ? $this->Html->link($clientesEndereco->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $clientesEndereco->cliente->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($clientesEndereco->rua) ?></td>
            <td><?= h($clientesEndereco->numero) ?></td>
            <td><?= h($clientesEndereco->complemento) ?></td>
            <td><?= h($clientesEndereco->bairro) ?></td>
            <td><?= h($clientesEndereco->cidade) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $clientesEndereco->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientesEndereco->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientesEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesEndereco->id)]) ?>
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
