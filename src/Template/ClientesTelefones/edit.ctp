<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientesTelefone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientesTelefone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes Telefones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientesTelefones form large-10 medium-9 columns">
    <?= $this->Form->create($clientesTelefone) ?>
    <fieldset>
        <legend><?= __('Edit Clientes Telefone') ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('telefone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
