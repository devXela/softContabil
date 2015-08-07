<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Pagar Rateio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAPagarRateios index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('contas_a_pagar_id') ?></th>
            <th><?= $this->Paginator->sort('setores_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contasAPagarRateios as $contasAPagarRateio): ?>
        <tr>
            <td><?= $this->Number->format($contasAPagarRateio->id) ?></td>
            <td><?= $this->Number->format($contasAPagarRateio->contas_a_pagar_id) ?></td>
            <td>
                <?= $contasAPagarRateio->has('setore') ? $this->Html->link($contasAPagarRateio->setore->id, ['controller' => 'Setores', 'action' => 'view', $contasAPagarRateio->setore->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAPagarRateio->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAPagarRateio->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAPagarRateio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRateio->id)]) ?>
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
