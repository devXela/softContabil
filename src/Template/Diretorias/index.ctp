<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Diretoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gerencias'), ['controller' => 'Gerencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gerencia'), ['controller' => 'Gerencias', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="diretorias index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa_id') ?></th>
            <th><?= $this->Paginator->sort('diretoria') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($diretorias as $diretoria): ?>
        <tr>
            <td><?= $this->Number->format($diretoria->id) ?></td>
            <td>
                <?= $diretoria->has('empresa') ? $this->Html->link($diretoria->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $diretoria->empresa->id]) : '' ?>
            </td>
            <td><?= h($diretoria->diretoria) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $diretoria->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diretoria->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diretoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diretoria->id)]) ?>
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
