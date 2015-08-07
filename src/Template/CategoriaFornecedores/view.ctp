<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Categoria Fornecedore'), ['action' => 'edit', $categoriaFornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria Fornecedore'), ['action' => 'delete', $categoriaFornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaFornecedore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Fornecedore'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categoriaFornecedores view large-10 medium-9 columns">
    <h2><?= h($categoriaFornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Categoria') ?></h6>
            <p><?= h($categoriaFornecedore->categoria) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($categoriaFornecedore->id) ?></p>
        </div>
    </div>
</div>
