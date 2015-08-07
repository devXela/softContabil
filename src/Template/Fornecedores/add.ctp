<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classe Fornecedores'), ['controller' => 'ClasseFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'ClasseFornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['controller' => 'CategoriaFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'CategoriaFornecedores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($fornecedor) ?>
    <fieldset>
        <legend><?= __('Add Fornecedor') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas]);
            echo $this->Form->input('classe_fornecedor_id', ['options' => $classeFornecedores]);
            echo $this->Form->input('categoria_fornecedor_id', ['options' => $categoriaFornecedores]);
            echo $this->Form->input('indentificacao');
            echo $this->Form->input('email');
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
