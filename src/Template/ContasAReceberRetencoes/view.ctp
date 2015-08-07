<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Receber Retencao'), ['action' => 'edit', $contasAReceberRetencao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Receber Retencao'), ['action' => 'delete', $contasAReceberRetencao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceberRetencao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber Retencoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber Retencao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Retencoes'), ['controller' => 'Retencoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Retencao'), ['controller' => 'Retencoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAReceberRetencoes view large-10 medium-9 columns">
    <h2><?= h($contasAReceberRetencao->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Valor Retencao') ?></h6>
            <p><?= h($contasAReceberRetencao->valor_retencao) ?></p>
            <h6 class="subheader"><?= __('Retencao') ?></h6>
            <p><?= $contasAReceberRetencao->has('retencao') ? $this->Html->link($contasAReceberRetencao->retencao->id, ['controller' => 'Retencoes', 'action' => 'view', $contasAReceberRetencao->retencao->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Contas A Receber') ?></h6>
            <p><?= $contasAReceberRetencao->has('contas_a_receber') ? $this->Html->link($contasAReceberRetencao->contas_a_receber->id, ['controller' => 'ContasAReceber', 'action' => 'view', $contasAReceberRetencao->contas_a_receber->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAReceberRetencao->id) ?></p>
        </div>
    </div>
</div>
