<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Receber Retencao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAReceberRetencoes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('valor_retencao') ?></th>
            <th><?= $this->Paginator->sort('retencao_id') ?></th>
            <th><?= $this->Paginator->sort('contas_a_receber_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contasAReceberRetencoes as $contasAReceberRetencao): ?>
        <tr>
            <td><?= $this->Number->format($contasAReceberRetencao->id) ?></td>
            <td><?= h($contasAReceberRetencao->valor_retencao) ?></td>
            <td>
                <?= $contasAReceberRetencao->has('retencao') ? $this->Html->link($contasAReceberRetencao->retencao->id, ['controller' => 'Retencoes', 'action' => 'view', $contasAReceberRetencao->retencao->id]) : '' ?>
            </td>
            <td>
                <?= $contasAReceberRetencao->has('contas_a_receber') ? $this->Html->link($contasAReceberRetencao->contas_a_receber->id, ['controller' => 'ContasAReceber', 'action' => 'view', $contasAReceberRetencao->contas_a_receber->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAReceberRetencao->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAReceberRetencao->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAReceberRetencao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceberRetencao->id)]) ?>
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
