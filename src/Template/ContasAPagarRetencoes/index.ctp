<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Pagar Retenco'), ['action' => 'add']) ?></li>
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
    <?php foreach ($contasAPagarRetencoes as $contasAPagarRetenco): ?>
        <tr>
            <td><?= $this->Number->format($contasAPagarRetenco->id) ?></td>
            <td><?= h($contasAPagarRetenco->valor_retencao) ?></td>
            <td><?= $this->Number->format($contasAPagarRetenco->retencao_id) ?></td>
            <td><?= $this->Number->format($contasAPagarRetenco->contas_a_pagar_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAPagarRetenco->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAPagarRetenco->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAPagarRetenco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRetenco->id)]) ?>
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
