
<div class="empresas col-sm-12 ">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                <?= 'Adicionar ' .' '. 'empresa' ?>
            </h3>
        </div>
        <?= $this->Form->create($empresa) ?>
        <div class="box-body">

        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Atividade Empresa') ?></h6>
            <p><?= $empresa->has('atividade_empresa') ? $this->Html->link($empresa->atividade_empresa->descricao, ['controller' => 'AtividadeEmpresas', 'action' => 'view', $empresa->atividade_empresa->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Empresas Tipo') ?></h6>
            <p><?= $empresa->has('empresas_tipo') ? $this->Html->link($empresa->empresas_tipo->descricao, ['controller' => 'EmpresasTipos', 'action' => 'view', $empresa->empresas_tipo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Empresas Forma Tributacao') ?></h6>
            <p><?= $empresa->has('empresas_forma_tributacao') ? $this->Html->link($empresa->empresas_forma_tributacao->descricao, ['controller' => 'EmpresasFormaTributacoes', 'action' => 'view', $empresa->empresas_forma_tributacao->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($empresa->email) ?></p>
            <h6 class="subheader"><?= __('Nome Empresa') ?></h6>
            <p><?= h($empresa->nome_empresa) ?></p>
            <h6 class="subheader"><?= __('Forma Trabalho') ?></h6>
            <p><?= $empresa->has('forma_trabalho') ? $this->Html->link($empresa->forma_trabalho->descricao, ['controller' => 'FormaTrabalhos', 'action' => 'view', $empresa->forma_trabalho->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresa->id) ?></p>
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
    <!-- </div> -->
<!-- </div> -->
    </div>
</div>
</div>


<div class="empresas col-sm-12 ">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h4 class="box-title"><?= __('Clientes relacionados') ?></h4>
        </div>
        <?php if (!empty($empresa->clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Empresa Id') ?></th>
                    <th><?= __('Clientes Categorias Id') ?></th>
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
                <td><?= h($clientes->clientes_categorias_id) ?></td>
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

<div class="empresas col-sm-12 ">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h4 class="box-title"><?= __('Fornecedores relacionados') ?></h4>
        </div>
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
