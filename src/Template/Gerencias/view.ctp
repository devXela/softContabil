<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Gerencia'), ['action' => 'edit', $gerencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gerencia'), ['action' => 'delete', $gerencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gerencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gerencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gerencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diretorias'), ['controller' => 'Diretorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diretoria'), ['controller' => 'Diretorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="gerencias view large-10 medium-9 columns">
    <h2><?= h($gerencia->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Diretoria') ?></h6>
            <p><?= $gerencia->has('diretoria') ? $this->Html->link($gerencia->diretoria->id, ['controller' => 'Diretorias', 'action' => 'view', $gerencia->diretoria->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Gerencia') ?></h6>
            <p><?= h($gerencia->gerencia) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($gerencia->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Setores') ?></h4>
    <?php if (!empty($gerencia->setores)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Gerencia Id') ?></th>
            <th><?= __('Setor') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($gerencia->setores as $setores): ?>
        <tr>
            <td><?= h($setores->id) ?></td>
            <td><?= h($setores->gerencia_id) ?></td>
            <td><?= h($setores->setor) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Setores', 'action' => 'view', $setores->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Setores', 'action' => 'edit', $setores->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Setores', 'action' => 'delete', $setores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setores->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
