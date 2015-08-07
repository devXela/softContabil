<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contasAPagar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagar->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Forma Pagamentos'), ['controller' => 'FormaPagamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Pagamento'), ['controller' => 'FormaPagamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retenco'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAPagar form large-10 medium-9 columns">
    <?= $this->Form->create($contasAPagar) ?>
    <fieldset>
        <legend><?= __('Edit Contas A Pagar') ?></legend>
        <?php
            echo $this->Form->input('forma_pagamento_id', ['options' => $formaPagamentos]);
            echo $this->Form->input('fornecedor_id');
            echo $this->Form->input('numero_documento');
            echo $this->Form->input('valor_documento');
            echo $this->Form->input('valor_liquido');
            echo $this->Form->input('parcelas');
            echo $this->Form->input('retencoes._ids', ['options' => $retencoes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
