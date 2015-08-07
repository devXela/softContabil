<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Empresas Tipo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresasTipos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresasTipos as $empresasTipo): ?>
        <tr>
            <td><?= $this->Number->format($empresasTipo->id) ?></td>
            <td><?= h($empresasTipo->descricao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $empresasTipo->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresasTipo->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresasTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasTipo->id)]) ?>
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
