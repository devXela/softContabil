<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Diretoria'), ['action' => 'edit', $diretoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diretoria'), ['action' => 'delete', $diretoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diretoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diretorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diretoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gerencias'), ['controller' => 'Gerencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gerencia'), ['controller' => 'Gerencias', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="diretorias view large-10 medium-9 columns">
    <h2><?= h($diretoria->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $diretoria->has('empresa') ? $this->Html->link($diretoria->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $diretoria->empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Diretoria') ?></h6>
            <p><?= h($diretoria->diretoria) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($diretoria->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Gerencias') ?></h4>
    <?php if (!empty($diretoria->gerencias)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Diretoria Id') ?></th>
            <th><?= __('Gerencia') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($diretoria->gerencias as $gerencias): ?>
        <tr>
            <td><?= h($gerencias->id) ?></td>
            <td><?= h($gerencias->diretoria_id) ?></td>
            <td><?= h($gerencias->gerencia) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Gerencias', 'action' => 'view', $gerencias->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Gerencias', 'action' => 'edit', $gerencias->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gerencias', 'action' => 'delete', $gerencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gerencias->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
