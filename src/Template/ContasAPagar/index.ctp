<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Pagamentos'), ['controller' => 'FormaPagamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['controller' => 'FormaPagamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retenco'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAPagar index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('forma_pagamento_id') ?></th>
            <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('numero_documento') ?></th>
            <th><?= $this->Paginator->sort('valor_documento') ?></th>
            <th><?= $this->Paginator->sort('valor_liquido') ?></th>
            <th><?= $this->Paginator->sort('parcelas') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contasAPagar as $contasAPagar): ?>
        <tr>
            <td><?= $this->Number->format($contasAPagar->id) ?></td>
            <td>
                <?= $contasAPagar->has('forma_pagamento') ? $this->Html->link($contasAPagar->forma_pagamento->id, ['controller' => 'FormaPagamentos', 'action' => 'view', $contasAPagar->forma_pagamento->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($contasAPagar->fornecedor_id) ?></td>
            <td><?= $this->Number->format($contasAPagar->numero_documento) ?></td>
            <td><?= h($contasAPagar->valor_documento) ?></td>
            <td><?= h($contasAPagar->valor_liquido) ?></td>
            <td><?= $this->Number->format($contasAPagar->parcelas) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAPagar->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAPagar->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAPagar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagar->id)]) ?>
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
