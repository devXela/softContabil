<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contasAReceberRetencao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceberRetencao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber Retencoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAReceberRetencoes form large-10 medium-9 columns">
    <?= $this->Form->create($contasAReceberRetencao) ?>
    <fieldset>
        <legend><?= __('Edit Contas A Receber Retencao') ?></legend>
        <?php
            echo $this->Form->input('valor_retencao');
            echo $this->Form->input('retencao_id', ['options' => $retencoes]);
            echo $this->Form->input('contas_a_receber_id', ['options' => $contasAReceber]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
