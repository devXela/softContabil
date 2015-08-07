<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fornecedor'), ['action' => 'edit', $fornecedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fornecedor'), ['action' => 'delete', $fornecedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classe Fornecedores'), ['controller' => 'ClasseFornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classe Fornecedor'), ['controller' => 'ClasseFornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['controller' => 'CategoriaFornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Fornecedor'), ['controller' => 'CategoriaFornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fornecedores view large-10 medium-9 columns">
    <h2><?= h($fornecedor->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $fornecedor->has('empresa') ? $this->Html->link($fornecedor->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $fornecedor->empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('C') ?></h6>
            <p><?= $fornecedor->has('c') ? $this->Html->link($fornecedor->c->id, ['controller' => 'ClasseFornecedores', 'action' => 'view', $fornecedor->c->id]) : '' ?></p>
            <h6 class="subheader"><?= __('C') ?></h6>
            <p><?= $fornecedor->has('c') ? $this->Html->link($fornecedor->c->id, ['controller' => 'CategoriaFornecedores', 'action' => 'view', $fornecedor->c->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($fornecedor->email) ?></p>
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($fornecedor->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fornecedor->id) ?></p>
            <h6 class="subheader"><?= __('Indentificacao') ?></h6>
            <p><?= $this->Number->format($fornecedor->indentificacao) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contas A Pagar') ?></h4>
    <?php if (!empty($fornecedor->contas_a_pagar)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Forma Pagamento Id') ?></th>
            <th><?= __('Fornecedor Id') ?></th>
            <th><?= __('Numero Documento') ?></th>
            <th><?= __('Valor Documento') ?></th>
            <th><?= __('Valor Liquido') ?></th>
            <th><?= __('Parcelas') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($fornecedor->contas_a_pagar as $contasAPagar): ?>
        <tr>
            <td><?= h($contasAPagar->id) ?></td>
            <td><?= h($contasAPagar->forma_pagamento_id) ?></td>
            <td><?= h($contasAPagar->fornecedor_id) ?></td>
            <td><?= h($contasAPagar->numero_documento) ?></td>
            <td><?= h($contasAPagar->valor_documento) ?></td>
            <td><?= h($contasAPagar->valor_liquido) ?></td>
            <td><?= h($contasAPagar->parcelas) ?></td>
            <td><?= h($contasAPagar->created) ?></td>
            <td><?= h($contasAPagar->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ContasAPagar', 'action' => 'view', $contasAPagar->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ContasAPagar', 'action' => 'edit', $contasAPagar->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContasAPagar', 'action' => 'delete', $contasAPagar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagar->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
