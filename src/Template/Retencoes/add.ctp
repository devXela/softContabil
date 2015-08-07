<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Retencoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="retencoes form large-10 medium-9 columns">
    <?= $this->Form->create($retencao) ?>
    <fieldset>
        <legend><?= __('Add Retencao') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('contas_a_pagar._ids', ['options' => $contasAPagar]);
            echo $this->Form->input('contas_a_receber._ids', ['options' => $contasAReceber]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
