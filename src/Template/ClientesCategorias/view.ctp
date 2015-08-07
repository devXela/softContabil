<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Clientes Categoria'), ['action' => 'edit', $clientesCategoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clientes Categoria'), ['action' => 'delete', $clientesCategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesCategoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clientes Categoria'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientesCategorias view large-10 medium-9 columns">
    <h2><?= h($clientesCategoria->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($clientesCategoria->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientesCategoria->id) ?></p>
        </div>
    </div>
</div>
