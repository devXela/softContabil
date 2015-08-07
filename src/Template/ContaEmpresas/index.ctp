<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Conta Empresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas Gerentes'), ['controller' => 'ContaEmpresasGerentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresas Gerente'), ['controller' => 'ContaEmpresasGerentes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conta Empresas Tipos'), ['controller' => 'ContaEmpresasTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conta Empresas Tipo'), ['controller' => 'ContaEmpresasTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contaEmpresas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa_id') ?></th>
            <th><?= $this->Paginator->sort('banco_id') ?></th>
            <th><?= $this->Paginator->sort('conta_empresas_gerentes_id') ?></th>
            <th><?= $this->Paginator->sort('conta_empresas_tipos_id') ?></th>
            <th><?= $this->Paginator->sort('nome_conta') ?></th>
            <th><?= $this->Paginator->sort('agencia') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contaEmpresas as $contaEmpresa): ?>
        <tr>
            <td><?= $this->Number->format($contaEmpresa->id) ?></td>
            <td>
                <?= $contaEmpresa->has('empresa') ? $this->Html->link($contaEmpresa->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $contaEmpresa->empresa->id]) : '' ?>
            </td>
            <td>
                <?= $contaEmpresa->has('banco') ? $this->Html->link($contaEmpresa->banco->id, ['controller' => 'Bancos', 'action' => 'view', $contaEmpresa->banco->id]) : '' ?>
            </td>
            <td>
                <?= $contaEmpresa->has('conta_empresas_gerente') ? $this->Html->link($contaEmpresa->conta_empresas_gerente->id, ['controller' => 'ContaEmpresasGerentes', 'action' => 'view', $contaEmpresa->conta_empresas_gerente->id]) : '' ?>
            </td>
            <td>
                <?= $contaEmpresa->has('conta_empresas_tipo') ? $this->Html->link($contaEmpresa->conta_empresas_tipo->id, ['controller' => 'ContaEmpresasTipos', 'action' => 'view', $contaEmpresa->conta_empresas_tipo->id]) : '' ?>
            </td>
            <td><?= h($contaEmpresa->nome_conta) ?></td>
            <td><?= $this->Number->format($contaEmpresa->agencia) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contaEmpresa->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contaEmpresa->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contaEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresa->id)]) ?>
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
