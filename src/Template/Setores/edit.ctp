<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $setor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $setor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gerencias'), ['controller' => 'Gerencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gerencia'), ['controller' => 'Gerencias', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="setores form large-10 medium-9 columns">
    <?= $this->Form->create($setor) ?>
    <fieldset>
        <legend><?= __('Edit Setor') ?></legend>
        <?php
            echo $this->Form->input('gerencia_id', ['options' => $gerencias]);
            echo $this->Form->input('setor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
