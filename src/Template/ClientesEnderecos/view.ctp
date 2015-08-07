<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Clientes Endereco'), ['action' => 'edit', $clientesEndereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clientes Endereco'), ['action' => 'delete', $clientesEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesEndereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clientes Endereco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientesEnderecos view large-10 medium-9 columns">
    <h2><?= h($clientesEndereco->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cliente') ?></h6>
            <p><?= $clientesEndereco->has('cliente') ? $this->Html->link($clientesEndereco->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $clientesEndereco->cliente->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Numero') ?></h6>
            <p><?= h($clientesEndereco->numero) ?></p>
            <h6 class="subheader"><?= __('Complemento') ?></h6>
            <p><?= h($clientesEndereco->complemento) ?></p>
            <h6 class="subheader"><?= __('Bairro') ?></h6>
            <p><?= h($clientesEndereco->bairro) ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= h($clientesEndereco->cidade) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientesEndereco->id) ?></p>
            <h6 class="subheader"><?= __('Rua') ?></h6>
            <p><?= $this->Number->format($clientesEndereco->rua) ?></p>
            <h6 class="subheader"><?= __('Cep') ?></h6>
            <p><?= $this->Number->format($clientesEndereco->cep) ?></p>
        </div>
    </div>
</div>
