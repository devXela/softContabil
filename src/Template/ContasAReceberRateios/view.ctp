<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Receber Rateio'), ['action' => 'edit', $contasAReceberRateio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Receber Rateio'), ['action' => 'delete', $contasAReceberRateio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAReceberRateio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber Rateios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber Rateio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAReceberRateios view large-10 medium-9 columns">
    <h2><?= h($contasAReceberRateio->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Contas A Receber') ?></h6>
            <p><?= $contasAReceberRateio->has('contas_a_receber') ? $this->Html->link($contasAReceberRateio->contas_a_receber->id, ['controller' => 'ContasAReceber', 'action' => 'view', $contasAReceberRateio->contas_a_receber->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Setore') ?></h6>
            <p><?= $contasAReceberRateio->has('setore') ? $this->Html->link($contasAReceberRateio->setore->id, ['controller' => 'Setores', 'action' => 'view', $contasAReceberRateio->setore->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAReceberRateio->id) ?></p>
        </div>
    </div>
</div>
