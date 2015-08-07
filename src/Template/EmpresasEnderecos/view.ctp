<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresas Endereco'), ['action' => 'edit', $empresasEndereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresas Endereco'), ['action' => 'delete', $empresasEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasEndereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresas Endereco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresasEnderecos view large-10 medium-9 columns">
    <h2><?= h($empresasEndereco->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $empresasEndereco->has('empresa') ? $this->Html->link($empresasEndereco->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $empresasEndereco->empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Rua') ?></h6>
            <p><?= h($empresasEndereco->rua) ?></p>
            <h6 class="subheader"><?= __('Numero') ?></h6>
            <p><?= h($empresasEndereco->numero) ?></p>
            <h6 class="subheader"><?= __('Complemento') ?></h6>
            <p><?= h($empresasEndereco->complemento) ?></p>
            <h6 class="subheader"><?= __('Bairro') ?></h6>
            <p><?= h($empresasEndereco->bairro) ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= h($empresasEndereco->cidade) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresasEndereco->id) ?></p>
            <h6 class="subheader"><?= __('Cep') ?></h6>
            <p><?= $this->Number->format($empresasEndereco->cep) ?></p>
        </div>
    </div>
</div>
