<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Pagar Retenco'), ['action' => 'edit', $contasAPagarRetenco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Pagar Retenco'), ['action' => 'delete', $contasAPagarRetenco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRetenco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar Retencoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar Retenco'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAPagarRetencoes view large-10 medium-9 columns">
    <h2><?= h($contasAPagarRetenco->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Valor Retencao') ?></h6>
            <p><?= h($contasAPagarRetenco->valor_retencao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRetenco->id) ?></p>
            <h6 class="subheader"><?= __('Retencao Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRetenco->retencao_id) ?></p>
            <h6 class="subheader"><?= __('Contas A Pagar Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRetenco->contas_a_pagar_id) ?></p>
        </div>
    </div>
</div>
