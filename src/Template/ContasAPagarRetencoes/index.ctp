<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Pagar Retencao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAPagarRetencoes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('valor_retencao') ?></th>
            <th><?= $this->Paginator->sort('retencao_id') ?></th>
            <th><?= $this->Paginator->sort('contas_a_pagar_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contasAPagarRetencoes as $contasAPagarRetencao): ?>
        <tr>
            <td><?= $this->Number->format($contasAPagarRetencao->id) ?></td>
            <td><?= h($contasAPagarRetencao->valor_retencao) ?></td>
            <td>
                <?= $contasAPagarRetencao->has('retencao') ? $this->Html->link($contasAPagarRetencao->retencao->id, ['controller' => 'Retencoes', 'action' => 'view', $contasAPagarRetencao->retencao->id]) : '' ?>
            </td>
            <td>
                <?= $contasAPagarRetencao->has('contas_a_pagar') ? $this->Html->link($contasAPagarRetencao->contas_a_pagar->id, ['controller' => 'ContasAPagar', 'action' => 'view', $contasAPagarRetencao->contas_a_pagar->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAPagarRetencao->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAPagarRetencao->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAPagarRetencao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRetencao->id)]) ?>
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
