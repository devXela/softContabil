<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atividade Empresas'), ['controller' => 'AtividadeEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividade Empresa'), ['controller' => 'AtividadeEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diretorias'), ['controller' => 'Diretorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diretoria'), ['controller' => 'Diretorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Forma Trabalhos'), ['controller' => 'FormaTrabalhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Forma Trabalho'), ['controller' => 'FormaTrabalhos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresas view large-10 medium-9 columns">
    <h2><?= h($empresa->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Atividade Empresa') ?></h6>
            <p><?= $empresa->has('atividade_empresa') ? $this->Html->link($empresa->atividade_empresa->id, ['controller' => 'AtividadeEmpresas', 'action' => 'view', $empresa->atividade_empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($empresa->email) ?></p>
            <h6 class="subheader"><?= __('Nome Empresa') ?></h6>
            <p><?= h($empresa->nome_empresa) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresa->id) ?></p>
            <h6 class="subheader"><?= __('Tipo Empresa Id') ?></h6>
            <p><?= $this->Number->format($empresa->tipo_empresa_id) ?></p>
            <h6 class="subheader"><?= __('Forma Tributacao Empresa Id') ?></h6>
            <p><?= $this->Number->format($empresa->forma_tributacao_empresa_id) ?></p>
            <h6 class="subheader"><?= __('Cnpj') ?></h6>
            <p><?= $this->Number->format($empresa->cnpj) ?></p>
            <h6 class="subheader"><?= __('Percentual Juros') ?></h6>
            <p><?= $this->Number->format($empresa->percentual_juros) ?></p>
            <h6 class="subheader"><?= __('Percentual Multa') ?></h6>
            <p><?= $this->Number->format($empresa->percentual_multa) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($empresa->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($empresa->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Clientes') ?></h4>
    <?php if (!empty($empresa->clientes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Empresa Id') ?></th>
            <th><?= __('Categoria Clientes Id') ?></th>
            <th><?= __('Identificacao') ?></th>
            <th><?= __('Nome') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Responsavel') ?></th>
            <th><?= __('Limite Credito') ?></th>
            <th><?= __('Percentual Multa') ?></th>
            <th><?= __('Percentual Juros') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($empresa->clientes as $clientes): ?>
        <tr>
            <td><?= h($clientes->id) ?></td>
            <td><?= h($clientes->empresa_id) ?></td>
            <td><?= h($clientes->categoria_clientes_id) ?></td>
            <td><?= h($clientes->identificacao) ?></td>
            <td><?= h($clientes->nome) ?></td>
            <td><?= h($clientes->email) ?></td>
            <td><?= h($clientes->responsavel) ?></td>
            <td><?= h($clientes->limite_credito) ?></td>
            <td><?= h($clientes->percentual_multa) ?></td>
            <td><?= h($clientes->percentual_juros) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Diretorias') ?></h4>
    <?php if (!empty($empresa->diretorias)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Empresa Id') ?></th>
            <th><?= __('Diretoria') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($empresa->diretorias as $diretorias): ?>
        <tr>
            <td><?= h($diretorias->id) ?></td>
            <td><?= h($diretorias->empresa_id) ?></td>
            <td><?= h($diretorias->diretoria) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Diretorias', 'action' => 'view', $diretorias->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Diretorias', 'action' => 'edit', $diretorias->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Diretorias', 'action' => 'delete', $diretorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diretorias->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Fornecedores') ?></h4>
    <?php if (!empty($empresa->fornecedores)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Empresa Id') ?></th>
            <th><?= __('Classe Fornecedor Id') ?></th>
            <th><?= __('Categoria Fornecedor Id') ?></th>
            <th><?= __('Indentificacao') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Nome') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($empresa->fornecedores as $fornecedores): ?>
        <tr>
            <td><?= h($fornecedores->id) ?></td>
            <td><?= h($fornecedores->empresa_id) ?></td>
            <td><?= h($fornecedores->classe_fornecedor_id) ?></td>
            <td><?= h($fornecedores->categoria_fornecedor_id) ?></td>
            <td><?= h($fornecedores->indentificacao) ?></td>
            <td><?= h($fornecedores->email) ?></td>
            <td><?= h($fornecedores->nome) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Fornecedores', 'action' => 'view', $fornecedores->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Fornecedores', 'action' => 'edit', $fornecedores->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fornecedores', 'action' => 'delete', $fornecedores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedores->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Forma Trabalhos') ?></h4>
    <?php if (!empty($empresa->forma_trabalhos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($empresa->forma_trabalhos as $formaTrabalhos): ?>
        <tr>
            <td><?= h($formaTrabalhos->id) ?></td>
            <td><?= h($formaTrabalhos->descricao) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'FormaTrabalhos', 'action' => 'view', $formaTrabalhos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'FormaTrabalhos', 'action' => 'edit', $formaTrabalhos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FormaTrabalhos', 'action' => 'delete', $formaTrabalhos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formaTrabalhos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
