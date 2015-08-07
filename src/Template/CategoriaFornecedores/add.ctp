<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="categoriaFornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($c) ?>
    <fieldset>
        <legend><?= __('Add C') ?></legend>
        <?php
            echo $this->Form->input('categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
