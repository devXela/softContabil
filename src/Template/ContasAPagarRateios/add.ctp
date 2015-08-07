<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contas A Pagar Rateios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contasAPagarRateios form large-10 medium-9 columns">
    <?= $this->Form->create($contasAPagarRateio) ?>
    <fieldset>
        <legend><?= __('Add Contas A Pagar Rateio') ?></legend>
        <?php
            echo $this->Form->input('contas_a_pagar_id');
            echo $this->Form->input('setores_id', ['options' => $setores]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
