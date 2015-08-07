<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contas A Receber Rateio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAReceberRateios index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('contas_a_receber_id') ?></th>
            <th><?= $this->Paginator->sort('setores_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contasAReceberRateios as $contasAReceberRateio): ?>
        <tr>
            <td><?= $this->Number->format($contasAReceberRateio->id) ?></td>
            <td>
                <?= $contasAReceberRateio->has('contas_a_receber') ? $this->Html->link($contasAReceberRateio->contas_a_receber->id, ['controller' => 'ContasAReceber', 'action' => 'view', $contasAReceberRateio->contas_a_receber->id]) : '' ?>
            </td>
            <td>
                <?= $contasAReceberRateio->has('setore') ? $this->Html->link($contasAReceberRateio->setore->id, ['controller' => 'Setores', 'action' => 'view', $contasAReceberRateio->setore->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contasAReceberRateio->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contasAReceberRateio->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contasAReceberRateio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceberRateio->id)]) ?>
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
