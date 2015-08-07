<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresas Forma Tributaco'), ['action' => 'edit', $empresasFormaTributaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresas Forma Tributaco'), ['action' => 'delete', $empresasFormaTributaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasFormaTributaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas Forma Tributacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresas Forma Tributaco'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresasFormaTributacoes view large-10 medium-9 columns">
    <h2><?= h($empresasFormaTributaco->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($empresasFormaTributaco->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresasFormaTributaco->id) ?></p>
        </div>
    </div>
</div>
