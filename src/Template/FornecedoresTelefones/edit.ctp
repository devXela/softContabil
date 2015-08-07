<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fornecedoresTelefone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedoresTelefone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fornecedores Telefones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fornecedoresTelefones form large-10 medium-9 columns">
    <?= $this->Form->create($fornecedoresTelefone) ?>
    <fieldset>
        <legend><?= __('Edit Fornecedores Telefone') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
            echo $this->Form->input('telefone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
