<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Forma Recebimento'), ['action' => 'edit', $formaRecebimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forma Recebimento'), ['action' => 'delete', $formaRecebimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formaRecebimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forma Recebimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Recebimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="formaRecebimentos view large-10 medium-9 columns">
    <h2><?= h($formaRecebimento->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($formaRecebimento->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($formaRecebimento->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contas A Receber') ?></h4>
    <?php if (!empty($formaRecebimento->contas_a_receber)): ?>
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
        <?php foreach ($formaRecebimento->contas_a_receber as $contasAReceber): ?>
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
