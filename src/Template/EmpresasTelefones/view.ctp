<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresas Telefone'), ['action' => 'edit', $empresasTelefone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresas Telefone'), ['action' => 'delete', $empresasTelefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasTelefone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas Telefones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresas Telefone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresasTelefones view large-10 medium-9 columns">
    <h2><?= h($empresasTelefone->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $empresasTelefone->has('empresa') ? $this->Html->link($empresasTelefone->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $empresasTelefone->empresa->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresasTelefone->id) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= $this->Number->format($empresasTelefone->telefone) ?></p>
        </div>
    </div>
</div>
