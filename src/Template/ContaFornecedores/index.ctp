<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Conta Fornecedore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contaFornecedores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('conta') ?></th>
            <th><?= $this->Paginator->sort('agencia') ?></th>
            <th><?= $this->Paginator->sort('banco_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contaFornecedores as $contaFornecedore): ?>
        <tr>
            <td><?= $this->Number->format($contaFornecedore->id) ?></td>
            <td><?= $this->Number->format($contaFornecedore->fornecedor_id) ?></td>
            <td><?= h($contaFornecedore->conta) ?></td>
            <td><?= h($contaFornecedore->agencia) ?></td>
            <td>
                <?= $contaFornecedore->has('banco') ? $this->Html->link($contaFornecedore->banco->id, ['controller' => 'Bancos', 'action' => 'view', $contaFornecedore->banco->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contaFornecedore->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contaFornecedore->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contaFornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaFornecedore->id)]) ?>
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
