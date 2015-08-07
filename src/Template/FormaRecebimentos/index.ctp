<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Forma Recebimento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="formaRecebimentos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($formaRecebimentos as $formaRecebimento): ?>
        <tr>
            <td><?= $this->Number->format($formaRecebimento->id) ?></td>
            <td><?= h($formaRecebimento->descricao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $formaRecebimento->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formaRecebimento->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formaRecebimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formaRecebimento->id)]) ?>
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
