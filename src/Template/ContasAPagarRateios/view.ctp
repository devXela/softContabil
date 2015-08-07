<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contas A Pagar Rateio'), ['action' => 'edit', $contasAPagarRateio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contas A Pagar Rateio'), ['action' => 'delete', $contasAPagarRateio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contasAPagarRateio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar Rateios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar Rateio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contasAPagarRateios view large-10 medium-9 columns">
    <h2><?= h($contasAPagarRateio->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Contas A Pagar') ?></h6>
            <p><?= $contasAPagarRateio->has('contas_a_pagar') ? $this->Html->link($contasAPagarRateio->contas_a_pagar->id, ['controller' => 'ContasAPagar', 'action' => 'view', $contasAPagarRateio->contas_a_pagar->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Setore') ?></h6>
            <p><?= $contasAPagarRateio->has('setore') ? $this->Html->link($contasAPagarRateio->setore->id, ['controller' => 'Setores', 'action' => 'view', $contasAPagarRateio->setore->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contasAPagarRateio->id) ?></p>
        </div>
    </div>
</div>
