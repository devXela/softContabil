<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Conta Empresas Gerente'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="contaEmpresasGerentes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('telefone') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contaEmpresasGerentes as $contaEmpresasGerente): ?>
        <tr>
            <td><?= $this->Number->format($contaEmpresasGerente->id) ?></td>
            <td><?= $this->Number->format($contaEmpresasGerente->telefone) ?></td>
            <td><?= h($contaEmpresasGerente->nome) ?></td>
            <td><?= h($contaEmpresasGerente->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contaEmpresasGerente->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contaEmpresasGerente->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contaEmpresasGerente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresasGerente->id)]) ?>
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
