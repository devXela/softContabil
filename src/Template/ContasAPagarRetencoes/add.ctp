<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contas A Pagar Retencoes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contasAPagarRetencoes form large-10 medium-9 columns">
    <?= $this->Form->create($contasAPagarRetencao) ?>
    <fieldset>
        <legend><?= __('Add Contas A Pagar Retencao') ?></legend>
        <?php
            echo $this->Form->input('valor_retencao');
            echo $this->Form->input('retencao_id');
            echo $this->Form->input('contas_a_pagar_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
