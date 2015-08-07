<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gerencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gerencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gerencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diretorias'), ['controller' => 'Diretorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diretoria'), ['controller' => 'Diretorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="gerencias form large-10 medium-9 columns">
    <?= $this->Form->create($gerencia) ?>
    <fieldset>
        <legend><?= __('Edit Gerencia') ?></legend>
        <?php
            echo $this->Form->input('diretoria_id', ['options' => $diretorias]);
            echo $this->Form->input('gerencia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
