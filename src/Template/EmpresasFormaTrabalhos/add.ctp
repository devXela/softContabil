<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Empresas Forma Trabalhos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['controller' => 'FormaTrabalhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['controller' => 'FormaTrabalhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresasFormaTrabalhos form large-10 medium-9 columns">
    <?= $this->Form->create($empresasFormaTrabalho) ?>
    <fieldset>
        <legend><?= __('Add Empresas Forma Trabalho') ?></legend>
        <?php
            echo $this->Form->input('forma_trabalhos_id', ['options' => $formaTrabalhos]);
            echo $this->Form->input('empresas_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
