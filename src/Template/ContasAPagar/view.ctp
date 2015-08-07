<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Pagar'), ['action' => 'edit', $contasAPagar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Pagar'), ['action' => 'delete', $contasAPagar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forma Pagamentos'), ['controller' => 'FormaPagamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['controller' => 'FormaPagamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Retenco'), ['controller' => 'Retencoes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAPagar view large-10 medium-9 columns">
    <h2><?= h($contasAPagar->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Forma Pagamento') ?></h6>
            <p><?= $contasAPagar->has('forma_pagamento') ? $this->Html->link($contasAPagar->forma_pagamento->id, ['controller' => 'FormaPagamentos', 'action' => 'view', $contasAPagar->forma_pagamento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Valor Documento') ?></h6>
            <p><?= h($contasAPagar->valor_documento) ?></p>
            <h6 class="subheader"><?= __('Valor Liquido') ?></h6>
            <p><?= h($contasAPagar->valor_liquido) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAPagar->id) ?></p>
            <h6 class="subheader"><?= __('Fornecedor Id') ?></h6>
            <p><?= $this->Number->format($contasAPagar->fornecedor_id) ?></p>
            <h6 class="subheader"><?= __('Numero Documento') ?></h6>
            <p><?= $this->Number->format($contasAPagar->numero_documento) ?></p>
            <h6 class="subheader"><?= __('Parcelas') ?></h6>
            <p><?= $this->Number->format($contasAPagar->parcelas) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($contasAPagar->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($contasAPagar->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Retencoes') ?></h4>
    <?php if (!empty($contasAPagar->retencoes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($contasAPagar->retencoes as $retencoes): ?>
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
