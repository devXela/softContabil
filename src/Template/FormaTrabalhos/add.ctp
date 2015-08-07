<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="formaTrabalhos form large-10 medium-9 columns">
    <?= $this->Form->create($formaTrabalho) ?>
    <fieldset>
        <legend><?= __('Add Forma Trabalho') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('empresas._ids', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
