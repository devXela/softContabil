<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Conta Empresas Tipo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="contaEmpresasTipos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contaEmpresasTipos as $contaEmpresasTipo): ?>
        <tr>
            <td><?= $this->Number->format($contaEmpresasTipo->id) ?></td>
            <td><?= h($contaEmpresasTipo->descricao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contaEmpresasTipo->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contaEmpresasTipo->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contaEmpresasTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresasTipo->id)]) ?>
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
