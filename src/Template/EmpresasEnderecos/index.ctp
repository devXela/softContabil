<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Empresas Endereco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresasEnderecos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa_id') ?></th>
            <th><?= $this->Paginator->sort('rua') ?></th>
            <th><?= $this->Paginator->sort('numero') ?></th>
            <th><?= $this->Paginator->sort('complemento') ?></th>
            <th><?= $this->Paginator->sort('bairro') ?></th>
            <th><?= $this->Paginator->sort('cidade') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresasEnderecos as $empresasEndereco): ?>
        <tr>
            <td><?= $this->Number->format($empresasEndereco->id) ?></td>
            <td>
                <?= $empresasEndereco->has('empresa') ? $this->Html->link($empresasEndereco->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $empresasEndereco->empresa->id]) : '' ?>
            </td>
            <td><?= h($empresasEndereco->rua) ?></td>
            <td><?= h($empresasEndereco->numero) ?></td>
            <td><?= h($empresasEndereco->complemento) ?></td>
            <td><?= h($empresasEndereco->bairro) ?></td>
            <td><?= h($empresasEndereco->cidade) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $empresasEndereco->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresasEndereco->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresasEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasEndereco->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
