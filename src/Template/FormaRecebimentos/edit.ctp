<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formaRecebimento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formaRecebimento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Forma Recebimentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Receber'), ['controller' => 'ContasAReceber', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="formaRecebimentos form large-10 medium-9 columns">
    <?= $this->Form->create($formaRecebimento) ?>
    <fieldset>
        <legend><?= __('Edit Forma Recebimento') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
