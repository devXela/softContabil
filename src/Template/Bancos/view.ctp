<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Banco'), ['action' => 'edit', $banco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banco'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['controller' => 'ContaEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['controller' => 'ContaEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conta Fornecedores'), ['controller' => 'ContaFornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Fornecedore'), ['controller' => 'ContaFornecedores', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bancos view large-10 medium-9 columns">
    <h2><?= h($banco->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($banco->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($banco->id) ?></p>
            <h6 class="subheader"><?= __('Codigo') ?></h6>
            <p><?= $this->Number->format($banco->codigo) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Conta Empresas') ?></h4>
    <?php if (!empty($banco->conta_empresas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Empresa Id') ?></th>
            <th><?= __('Banco Id') ?></th>
            <th><?= __('Conta Empresas Gerentes Id') ?></th>
            <th><?= __('Conta Empresas Tipos Id') ?></th>
            <th><?= __('Nome Conta') ?></th>
            <th><?= __('Agencia') ?></th>
            <th><?= __('Numero Conta') ?></th>
            <th><?= __('Limite') ?></th>
            <th><?= __('Desconto Cartao') ?></th>
            <th><?= __('Saldo Abertura') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($banco->conta_empresas as $contaEmpresas): ?>
        <tr>
            <td><?= h($contaEmpresas->id) ?></td>
            <td><?= h($contaEmpresas->empresa_id) ?></td>
            <td><?= h($contaEmpresas->banco_id) ?></td>
            <td><?= h($contaEmpresas->conta_empresas_gerentes_id) ?></td>
            <td><?= h($contaEmpresas->conta_empresas_tipos_id) ?></td>
            <td><?= h($contaEmpresas->nome_conta) ?></td>
            <td><?= h($contaEmpresas->agencia) ?></td>
            <td><?= h($contaEmpresas->numero_conta) ?></td>
            <td><?= h($contaEmpresas->limite) ?></td>
            <td><?= h($contaEmpresas->desconto_cartao) ?></td>
            <td><?= h($contaEmpresas->saldo_abertura) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ContaEmpresas', 'action' => 'view', $contaEmpresas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ContaEmpresas', 'action' => 'edit', $contaEmpresas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContaEmpresas', 'action' => 'delete', $contaEmpresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Conta Fornecedores') ?></h4>
    <?php if (!empty($banco->conta_fornecedores)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Fornecedor Id') ?></th>
            <th><?= __('Conta') ?></th>
            <th><?= __('Agencia') ?></th>
            <th><?= __('Banco Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($banco->conta_fornecedores as $contaFornecedores): ?>
        <tr>
            <td><?= h($contaFornecedores->id) ?></td>
            <td><?= h($contaFornecedores->fornecedor_id) ?></td>
            <td><?= h($contaFornecedores->conta) ?></td>
            <td><?= h($contaFornecedores->agencia) ?></td>
            <td><?= h($contaFornecedores->banco_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ContaFornecedores', 'action' => 'view', $contaFornecedores->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ContaFornecedores', 'action' => 'edit', $contaFornecedores->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContaFornecedores', 'action' => 'delete', $contaFornecedores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaFornecedores->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
