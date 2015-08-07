<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresas Forma Trabalho'), ['action' => 'edit', $empresasFormaTrabalho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresas Forma Trabalho'), ['action' => 'delete', $empresasFormaTrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasFormaTrabalho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas Forma Trabalhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresas Forma Trabalho'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['controller' => 'FormaTrabalhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['controller' => 'FormaTrabalhos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresasFormaTrabalhos view large-10 medium-9 columns">
    <h2><?= h($empresasFormaTrabalho->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Forma Trabalho') ?></h6>
            <p><?= $empresasFormaTrabalho->has('forma_trabalho') ? $this->Html->link($empresasFormaTrabalho->forma_trabalho->id, ['controller' => 'FormaTrabalhos', 'action' => 'view', $empresasFormaTrabalho->forma_trabalho->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $empresasFormaTrabalho->has('empresa') ? $this->Html->link($empresasFormaTrabalho->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $empresasFormaTrabalho->empresa->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresasFormaTrabalho->id) ?></p>
        </div>
    </div>
</div>
