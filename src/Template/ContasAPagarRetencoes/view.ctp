<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Pagar Retencao'), ['action' => 'edit', $contasAPagarRetencao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Pagar Retencao'), ['action' => 'delete', $contasAPagarRetencao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRetencao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar Retencoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar Retencao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAPagarRetencoes view large-10 medium-9 columns">
    <h2><?= h($contasAPagarRetencao->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Valor Retencao') ?></h6>
            <p><?= h($contasAPagarRetencao->valor_retencao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRetencao->id) ?></p>
            <h6 class="subheader"><?= __('Retencao Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRetencao->retencao_id) ?></p>
            <h6 class="subheader"><?= __('Contas A Pagar Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRetencao->contas_a_pagar_id) ?></p>
        </div>
    </div>
</div>
