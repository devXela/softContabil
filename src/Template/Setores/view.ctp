<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Setor'), ['action' => 'edit', $setor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Setor'), ['action' => 'delete', $setor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gerencias'), ['controller' => 'Gerencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gerencia'), ['controller' => 'Gerencias', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="setores view large-10 medium-9 columns">
    <h2><?= h($setor->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Gerencia') ?></h6>
            <p><?= $setor->has('gerencia') ? $this->Html->link($setor->gerencia->id, ['controller' => 'Gerencias', 'action' => 'view', $setor->gerencia->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Setor') ?></h6>
            <p><?= h($setor->setor) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($setor->id) ?></p>
        </div>
    </div>
</div>
