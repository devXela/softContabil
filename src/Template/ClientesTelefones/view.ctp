<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Clientes Telefone'), ['action' => 'edit', $clientesTelefone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clientes Telefone'), ['action' => 'delete', $clientesTelefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesTelefone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes Telefones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clientes Telefone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientesTelefones view large-10 medium-9 columns">
    <h2><?= h($clientesTelefone->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cliente') ?></h6>
            <p><?= $clientesTelefone->has('cliente') ? $this->Html->link($clientesTelefone->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $clientesTelefone->cliente->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientesTelefone->id) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= $this->Number->format($clientesTelefone->telefone) ?></p>
        </div>
    </div>
</div>
