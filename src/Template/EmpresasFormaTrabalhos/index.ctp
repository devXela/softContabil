<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Empresas Forma Trabalho'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['controller' => 'FormaTrabalhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['controller' => 'FormaTrabalhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresasFormaTrabalhos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('forma_trabalhos_id') ?></th>
            <th><?= $this->Paginator->sort('empresas_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresasFormaTrabalhos as $empresasFormaTrabalho): ?>
        <tr>
            <td><?= $this->Number->format($empresasFormaTrabalho->id) ?></td>
            <td>
                <?= $empresasFormaTrabalho->has('forma_trabalho') ? $this->Html->link($empresasFormaTrabalho->forma_trabalho->id, ['controller' => 'FormaTrabalhos', 'action' => 'view', $empresasFormaTrabalho->forma_trabalho->id]) : '' ?>
            </td>
            <td>
                <?= $empresasFormaTrabalho->has('empresa') ? $this->Html->link($empresasFormaTrabalho->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $empresasFormaTrabalho->empresa->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $empresasFormaTrabalho->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresasFormaTrabalho->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresasFormaTrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasFormaTrabalho->id)]) ?>
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
