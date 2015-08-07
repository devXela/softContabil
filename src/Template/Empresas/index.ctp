<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atividade Empresas'), ['controller' => 'AtividadeEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividade Empresa'), ['controller' => 'AtividadeEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diretorias'), ['controller' => 'Diretorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diretoria'), ['controller' => 'Diretorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['controller' => 'FormaTrabalhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['controller' => 'FormaTrabalhos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('atividade_empresa_id') ?></th>
            <th><?= $this->Paginator->sort('tipo_empresa_id') ?></th>
            <th><?= $this->Paginator->sort('forma_tributacao_empresa_id') ?></th>
            <th><?= $this->Paginator->sort('cnpj') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('nome_empresa') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresas as $empresa): ?>
        <tr>
            <td><?= $this->Number->format($empresa->id) ?></td>
            <td>
                <?= $empresa->has('atividade_empresa') ? $this->Html->link($empresa->atividade_empresa->id, ['controller' => 'AtividadeEmpresas', 'action' => 'view', $empresa->atividade_empresa->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($empresa->tipo_empresa_id) ?></td>
            <td><?= $this->Number->format($empresa->forma_tributacao_empresa_id) ?></td>
            <td><?= $this->Number->format($empresa->cnpj) ?></td>
            <td><?= h($empresa->email) ?></td>
            <td><?= h($empresa->nome_empresa) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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
