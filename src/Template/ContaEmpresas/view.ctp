<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Conta Empresa'), ['action' => 'edit', $contaEmpresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conta Empresa'), ['action' => 'delete', $contaEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conta Empresas Gerentes'), ['controller' => 'ContaEmpresasGerentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Empresas Gerente'), ['controller' => 'ContaEmpresasGerentes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conta Empresas Tipos'), ['controller' => 'ContaEmpresasTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Empresas Tipo'), ['controller' => 'ContaEmpresasTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contaEmpresas view large-10 medium-9 columns">
    <h2><?= h($contaEmpresa->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $contaEmpresa->has('empresa') ? $this->Html->link($contaEmpresa->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $contaEmpresa->empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Banco') ?></h6>
            <p><?= $contaEmpresa->has('banco') ? $this->Html->link($contaEmpresa->banco->id, ['controller' => 'Bancos', 'action' => 'view', $contaEmpresa->banco->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Conta Empresas Gerente') ?></h6>
            <p><?= $contaEmpresa->has('conta_empresas_gerente') ? $this->Html->link($contaEmpresa->conta_empresas_gerente->id, ['controller' => 'ContaEmpresasGerentes', 'action' => 'view', $contaEmpresa->conta_empresas_gerente->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Conta Empresas Tipo') ?></h6>
            <p><?= $contaEmpresa->has('conta_empresas_tipo') ? $this->Html->link($contaEmpresa->conta_empresas_tipo->id, ['controller' => 'ContaEmpresasTipos', 'action' => 'view', $contaEmpresa->conta_empresas_tipo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Nome Conta') ?></h6>
            <p><?= h($contaEmpresa->nome_conta) ?></p>
            <h6 class="subheader"><?= __('Limite') ?></h6>
            <p><?= h($contaEmpresa->limite) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contaEmpresa->id) ?></p>
            <h6 class="subheader"><?= __('Agencia') ?></h6>
            <p><?= $this->Number->format($contaEmpresa->agencia) ?></p>
            <h6 class="subheader"><?= __('Numero Conta') ?></h6>
            <p><?= $this->Number->format($contaEmpresa->numero_conta) ?></p>
            <h6 class="subheader"><?= __('Desconto Cartao') ?></h6>
            <p><?= $this->Number->format($contaEmpresa->desconto_cartao) ?></p>
            <h6 class="subheader"><?= __('Saldo Abertura') ?></h6>
            <p><?= $this->Number->format($contaEmpresa->saldo_abertura) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contas A Receber') ?></h4>
    <?php if (!empty($contaEmpresa->contas_a_receber)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Cliente Id') ?></th>
            <th><?= __('Forma Recebimento Id') ?></th>
            <th><?= __('Conta Empresa Id') ?></th>
            <th><?= __('Numero Documento') ?></th>
            <th><?= __('Valor Documento') ?></th>
            <th><?= __('Valor Liquido') ?></th>
            <th><?= __('Parcelas') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($contaEmpresa->contas_a_receber as $contasAReceber): ?>
        <tr>
            <td><?= h($contasAReceber->id) ?></td>
            <td><?= h($contasAReceber->cliente_id) ?></td>
            <td><?= h($contasAReceber->forma_recebimento_id) ?></td>
            <td><?= h($contasAReceber->conta_empresa_id) ?></td>
            <td><?= h($contasAReceber->numero_documento) ?></td>
            <td><?= h($contasAReceber->valor_documento) ?></td>
            <td><?= h($contasAReceber->valor_liquido) ?></td>
            <td><?= h($contasAReceber->parcelas) ?></td>
            <td><?= h($contasAReceber->created) ?></td>
            <td><?= h($contasAReceber->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ContasAReceber', 'action' => 'view', $contasAReceber->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ContasAReceber', 'action' => 'edit', $contasAReceber->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContasAReceber', 'action' => 'delete', $contasAReceber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceber->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
