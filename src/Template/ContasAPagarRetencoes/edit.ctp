<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contasAPagarRetenco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRetenco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar Retencoes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contasAPagarRetencoes form large-10 medium-9 columns">
    <?= $this->Form->create($contasAPagarRetenco) ?>
    <fieldset>
        <legend><?= __('Edit Contas A Pagar Retenco') ?></legend>
        <?php
            echo $this->Form->input('valor_retencao');
            echo $this->Form->input('retencao_id');
            echo $this->Form->input('contas_a_pagar_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
