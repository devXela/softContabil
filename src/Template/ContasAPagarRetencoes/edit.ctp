<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contasAPagarRetencao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRetencao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar Retencoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAPagarRetencoes form large-10 medium-9 columns">
    <?= $this->Form->create($contasAPagarRetencao) ?>
    <fieldset>
        <legend><?= __('Edit Contas A Pagar Retencao') ?></legend>
        <?php
            echo $this->Form->input('valor_retencao');
            echo $this->Form->input('retencao_id', ['options' => $retencoes]);
            echo $this->Form->input('contas_a_pagar_id', ['options' => $contasAPagar]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
