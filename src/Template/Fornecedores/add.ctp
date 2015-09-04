<!-- <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classe Fornecedores'), ['controller' => 'ClasseFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'ClasseFornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Fornecedores'), ['controller' => 'CategoriaFornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'CategoriaFornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contas A Pagar'), ['controller' => 'ContasAPagar', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($fornecedor) ?>
    <fieldset>
        <legend><?= __('Add Fornecedor') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas, "class" => "form-control"]);
            echo $this->Form->input('classe_fornecedor_id', ['options' => $classeFornecedores]);
            echo $this->Form->input('categoria_fornecedor_id', ['options' => $categoriaFornecedores]);
            echo $this->Form->input('indentificacao');
            echo $this->Form->input('email');
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
<div class="col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Adicionar nova Empresa</h3>
        </div>
        <?=
            $campos = "";
            echo $this->Form->create($fornecedor);
            // campo empresa_id
            $campos .= $this->Html->div(
                "form-group",
                $this->Form->input("empresa_id", ["options" => $empresas, "class" => "form-control", "div" => false]),
                ["escape" => false]
            );
            // campo classe fornecedor
            $campos .= $this->Html->div(
                "form-group",
                $this->Form->input("classe_fornecedor_id", ["options" => $classeFornecedores, "class" => "form-control", "div" => false]),
                ["escape" => false]
            );
            // campo categoria fornecedor
            $campos .= $this->Html->div(
                "form-group",
                $this->Form->input("categoria_fornecedor_id", ["options" => $categoriaFornecedores, "class" => "form-control", "div" => false]),
                ["escape" => false]
            );
            // campo indentificacao
            $campos .= $this->Html->div(
                "form-group",
                $this->Form->input("indentificacao", ["class" => "form-control", "div" => false, 'placeholder' => 'Coloque sua identificacao']),
                ["escape" => false]
            );
            // campo email
            $campos .= $this->Html->div(
                "form-group",
                $this->Form->input("email", ["class" => "form-control", "div" => false, 'placeholder' => 'Coloque o seu email']),
                ["escape" => false]
            );
            // campo nome
            $campos .= $this->Html->div(
                "form-group",
                $this->Form->input("nome", ["class" => "form-control", "div" => false, 'placeholder' => 'Coloque o seu nome']),
                ["escape" => false]
            );
            echo $this->Html->div(
                "box-body",
                $campos,
                ["escape" => false]
            );
            echo $this->CamposForm->finalizaForm("Adicionar");
        ?>
    </div>
</div>

