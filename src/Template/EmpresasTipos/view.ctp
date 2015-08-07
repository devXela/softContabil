<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresas Tipo'), ['action' => 'edit', $empresasTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresas Tipo'), ['action' => 'delete', $empresasTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresas Tipo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresasTipos view large-10 medium-9 columns">
    <h2><?= h($empresasTipo->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($empresasTipo->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresasTipo->id) ?></p>
        </div>
    </div>
</div>
