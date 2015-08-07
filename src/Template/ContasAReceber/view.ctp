<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Receber'), ['action' => 'edit', $contasAReceber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Receber'), ['action' => 'delete', $contasAReceber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forma Recebimentos'), ['controller' => 'FormaRecebimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Recebimento'), ['controller' => 'FormaRecebimentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conta Empresas'), ['controller' => 'ContaEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta Empresa'), ['controller' => 'ContaEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAReceber view large-10 medium-9 columns">
    <h2><?= h($contasAReceber->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cliente') ?></h6>
            <p><?= $contasAReceber->has('cliente') ? $this->Html->link($contasAReceber->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $contasAReceber->cliente->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Forma Recebimento') ?></h6>
            <p><?= $contasAReceber->has('forma_recebimento') ? $this->Html->link($contasAReceber->forma_recebimento->id, ['controller' => 'FormaRecebimentos', 'action' => 'view', $contasAReceber->forma_recebimento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Conta Empresa') ?></h6>
            <p><?= $contasAReceber->has('conta_empresa') ? $this->Html->link($contasAReceber->conta_empresa->id, ['controller' => 'ContaEmpresas', 'action' => 'view', $contasAReceber->conta_empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Valor Documento') ?></h6>
            <p><?= h($contasAReceber->valor_documento) ?></p>
            <h6 class="subheader"><?= __('Valor Liquido') ?></h6>
            <p><?= h($contasAReceber->valor_liquido) ?></p>
            <h6 class="subheader"><?= __('Parcelas') ?></h6>
            <p><?= h($contasAReceber->parcelas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAReceber->id) ?></p>
            <h6 class="subheader"><?= __('Numero Documento') ?></h6>
            <p><?= $this->Number->format($contasAReceber->numero_documento) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($contasAReceber->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($contasAReceber->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Retencoes') ?></h4>
    <?php if (!empty($contasAReceber->retencoes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($contasAReceber->retencoes as $retencoes): ?>
        <tr>
            <td><?= h($retencoes->id) ?></td>
            <td><?= h($retencoes->descricao) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Retencoes', 'action' => 'view', $retencoes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Retencoes', 'action' => 'edit', $retencoes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Retencoes', 'action' => 'delete', $retencoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $retencoes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
