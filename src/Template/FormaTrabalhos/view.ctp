<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Forma Trabalho'), ['action' => 'edit', $formaTrabalho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Forma Trabalho'), ['action' => 'delete', $formaTrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formaTrabalho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="formaTrabalhos view large-10 medium-9 columns">
    <h2><?= h($formaTrabalho->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($formaTrabalho->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($formaTrabalho->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Empresas') ?></h4>
    <?php if (!empty($formaTrabalho->empresas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Atividade Empresa Id') ?></th>
            <th><?= __('Tipo Empresa Id') ?></th>
            <th><?= __('Forma Tributacao Empresa Id') ?></th>
            <th><?= __('Cnpj') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Nome Empresa') ?></th>
            <th><?= __('Percentual Juros') ?></th>
            <th><?= __('Percentual Multa') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($formaTrabalho->empresas as $empresas): ?>
        <tr>
            <td><?= h($empresas->id) ?></td>
            <td><?= h($empresas->atividade_empresa_id) ?></td>
            <td><?= h($empresas->tipo_empresa_id) ?></td>
            <td><?= h($empresas->forma_tributacao_empresa_id) ?></td>
            <td><?= h($empresas->cnpj) ?></td>
            <td><?= h($empresas->email) ?></td>
            <td><?= h($empresas->nome_empresa) ?></td>
            <td><?= h($empresas->percentual_juros) ?></td>
            <td><?= h($empresas->percentual_multa) ?></td>
            <td><?= h($empresas->created) ?></td>
            <td><?= h($empresas->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Empresas', 'action' => 'view', $empresas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Empresas', 'action' => 'edit', $empresas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresas', 'action' => 'delete', $empresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
