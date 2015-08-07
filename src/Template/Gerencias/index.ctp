<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Gerencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diretorias'), ['controller' => 'Diretorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diretoria'), ['controller' => 'Diretorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="gerencias index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('diretoria_id') ?></th>
            <th><?= $this->Paginator->sort('gerencia') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($gerencias as $gerencia): ?>
        <tr>
            <td><?= $this->Number->format($gerencia->id) ?></td>
            <td>
                <?= $gerencia->has('diretoria') ? $this->Html->link($gerencia->diretoria->id, ['controller' => 'Diretorias', 'action' => 'view', $gerencia->diretoria->id]) : '' ?>
            </td>
            <td><?= h($gerencia->gerencia) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $gerencia->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gerencia->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gerencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gerencia->id)]) ?>
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
