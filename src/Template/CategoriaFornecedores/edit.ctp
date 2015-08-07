<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriaFornecedore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaFornecedore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="categoriaFornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($categoriaFornecedore) ?>
    <fieldset>
        <legend><?= __('Edit Categoria Fornecedore') ?></legend>
        <?php
            echo $this->Form->input('categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
