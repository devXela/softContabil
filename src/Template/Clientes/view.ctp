<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientes view large-10 medium-9 columns">
    <h2><?= h($cliente->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $cliente->has('empresa') ? $this->Html->link($cliente->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $cliente->empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($cliente->nome) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($cliente->email) ?></p>
            <h6 class="subheader"><?= __('Responsavel') ?></h6>
            <p><?= h($cliente->responsavel) ?></p>
            <h6 class="subheader"><?= __('Limite Credito') ?></h6>
            <p><?= h($cliente->limite_credito) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cliente->id) ?></p>
            <h6 class="subheader"><?= __('Categoria Clientes Id') ?></h6>
            <p><?= $this->Number->format($cliente->categoria_clientes_id) ?></p>
            <h6 class="subheader"><?= __('Identificacao') ?></h6>
            <p><?= $this->Number->format($cliente->identificacao) ?></p>
            <h6 class="subheader"><?= __('Percentual Multa') ?></h6>
            <p><?= $this->Number->format($cliente->percentual_multa) ?></p>
            <h6 class="subheader"><?= __('Percentual Juros') ?></h6>
            <p><?= $this->Number->format($cliente->percentual_juros) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contas A Receber') ?></h4>
    <?php if (!empty($cliente->contas_a_receber)): ?>
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
        <?php foreach ($cliente->contas_a_receber as $contasAReceber): ?>
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
