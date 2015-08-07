<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Classe Fornecedores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="classeFornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($classeFornecedore) ?>
    <fieldset>
        <legend><?= __('Add Classe Fornecedore') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
