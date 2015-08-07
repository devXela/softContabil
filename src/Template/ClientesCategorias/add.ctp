<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Clientes Categorias'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="clientesCategorias form large-10 medium-9 columns">
    <?= $this->Form->create($clientesCategoria) ?>
    <fieldset>
        <legend><?= __('Add Clientes Categoria') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
