<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Empresas Telefone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresasTelefones index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa_id') ?></th>
            <th><?= $this->Paginator->sort('telefone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresasTelefones as $empresasTelefone): ?>
        <tr>
            <td><?= $this->Number->format($empresasTelefone->id) ?></td>
            <td>
                <?= $empresasTelefone->has('empresa') ? $this->Html->link($empresasTelefone->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $empresasTelefone->empresa->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($empresasTelefone->telefone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $empresasTelefone->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresasTelefone->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresasTelefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasTelefone->id)]) ?>
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
