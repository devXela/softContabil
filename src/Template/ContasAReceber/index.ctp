<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Receber'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Recebimentos'), ['controller' => 'FormaRecebimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Recebimento'), ['controller' => 'FormaRecebimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['controller' => 'ContaEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['controller' => 'ContaEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAReceber index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('cliente_id') ?></th>
            <th><?= $this->Paginator->sort('forma_recebimento_id') ?></th>
            <th><?= $this->Paginator->sort('conta_empresa_id') ?></th>
            <th><?= $this->Paginator->sort('numero_documento') ?></th>
            <th><?= $this->Paginator->sort('valor_documento') ?></th>
            <th><?= $this->Paginator->sort('valor_liquido') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contasAReceber as $contasAReceber): ?>
        <tr>
            <td><?= $this->Number->format($contasAReceber->id) ?></td>
            <td>
                <?= $contasAReceber->has('cliente') ? $this->Html->link($contasAReceber->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $contasAReceber->cliente->id]) : '' ?>
            </td>
            <td>
                <?= $contasAReceber->has('forma_recebimento') ? $this->Html->link($contasAReceber->forma_recebimento->id, ['controller' => 'FormaRecebimentos', 'action' => 'view', $contasAReceber->forma_recebimento->id]) : '' ?>
            </td>
            <td>
                <?= $contasAReceber->has('conta_empresa') ? $this->Html->link($contasAReceber->conta_empresa->id, ['controller' => 'ContaEmpresas', 'action' => 'view', $contasAReceber->conta_empresa->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($contasAReceber->numero_documento) ?></td>
            <td><?= h($contasAReceber->valor_documento) ?></td>
            <td><?= h($contasAReceber->valor_liquido) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAReceber->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAReceber->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAReceber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceber->id)]) ?>
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
