<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Empresas Tipos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="empresasTipos form large-10 medium-9 columns">
    <?= $this->Form->create($empresasTipo) ?>
    <fieldset>
        <legend><?= __('Add Empresas Tipo') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
