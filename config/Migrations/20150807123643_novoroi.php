<?php
use Phinx\Migration\AbstractMigration;

class Novoroi extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('atividade_empresas');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 40,
                'null' => false,
            ])
            ->create();

        $table = $this->table('bancos');
        $table
            ->addColumn('codigo', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();

        $table = $this->table('categoria_fornecedores');
        $table
            ->addColumn('categoria', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();

        $table = $this->table('classe_fornecedores');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();

        $table = $this->table('clientes');
        $table
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('categoria_clientes_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('identificacao', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('responsavel', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('limite_credito', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('percentual_multa', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('percentual_juros', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('clientes_categorias');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('clientes_enderecos');
        $table
            ->addColumn('cliente_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('rua', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('numero', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('complemento', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('bairro', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('cidade', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('cep', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('clientes_telefones');
        $table
            ->addColumn('cliente_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('telefone', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('conta_empresas');
        $table
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('banco_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('conta_empresas_gerentes_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('conta_empresas_tipos_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('nome_conta', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('agencia', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('numero_conta', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('limite', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('desconto_cartao', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('saldo_abertura', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('conta_empresas_gerentes');
        $table
            ->addColumn('telefone', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('conta_empresas_tipos');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('conta_fornecedores');
        $table
            ->addColumn('fornecedor_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('conta', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('agencia', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('banco_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('contas_a_pagar');
        $table
            ->addColumn('forma_pagamento_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('fornecedor_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('numero_documento', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('valor_documento', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('valor_liquido', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('parcelas', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('contas_a_pagar_rateios');
        $table
            ->addColumn('contas_a_pagar_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('setores_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('contas_a_pagar_retencoes');
        $table
            ->addColumn('valor_retencao', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('retencao_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('contas_a_pagar_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('contas_a_receber');
        $table
            ->addColumn('cliente_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('forma_recebimento_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('conta_empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('numero_documento', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('valor_documento', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('valor_liquido', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('parcelas', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('contas_a_receber_rateios');
        $table
            ->addColumn('contas_a_receber_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('setores_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('contas_a_receber_retencoes');
        $table
            ->addColumn('valor_retencao', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('retencao_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('contas_a_receber_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('diretorias');
        $table
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('diretoria', 'string', [
                'default' => null,
                'limit' => 80,
                'null' => false,
            ])
            ->create();

        $table = $this->table('empresas');
        $table
            ->addColumn('atividade_empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('tipo_empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('forma_tributacao_empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('cnpj', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('nome_empresa', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('percentual_juros', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('percentual_multa', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('empresas_enderecos');
        $table
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('rua', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('numero', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('complemento', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('bairro', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('cidade', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('cep', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('empresas_forma_trabalhos');
        $table
            ->addColumn('forma_trabalhos_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('empresas_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('empresas_forma_tributacoes');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->create();

        $table = $this->table('empresas_telefones');
        $table
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('telefone', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('empresas_tipos');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->create();

        $table = $this->table('forma_pagamentos');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->create();

        $table = $this->table('forma_recebimentos');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();

        $table = $this->table('forma_trabalhos');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('fornecedores');
        $table
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('classe_fornecedor_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('categoria_fornecedor_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('indentificacao', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->create();

        $table = $this->table('fornecedores_telefones');
        $table
            ->addColumn('fornecedor_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('telefone', 'decimal', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('gerencias');
        $table
            ->addColumn('diretoria_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('gerencia', 'string', [
                'default' => null,
                'limit' => 80,
                'null' => false,
            ])
            ->create();

        $table = $this->table('retencoes');
        $table
            ->addColumn('descricao', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->create();

        $table = $this->table('setores');
        $table
            ->addColumn('gerencia_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('setor', 'string', [
                'default' => null,
                'limit' => 80,
                'null' => false,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('atividade_empresas');
        $this->dropTable('bancos');
        $this->dropTable('categoria_fornecedores');
        $this->dropTable('classe_fornecedores');
        $this->dropTable('clientes');
        $this->dropTable('clientes_categorias');
        $this->dropTable('clientes_enderecos');
        $this->dropTable('clientes_telefones');
        $this->dropTable('conta_empresas');
        $this->dropTable('conta_empresas_gerentes');
        $this->dropTable('conta_empresas_tipos');
        $this->dropTable('conta_fornecedores');
        $this->dropTable('contas_a_pagar');
        $this->dropTable('contas_a_pagar_rateios');
        $this->dropTable('contas_a_pagar_retencoes');
        $this->dropTable('contas_a_receber');
        $this->dropTable('contas_a_receber_rateios');
        $this->dropTable('contas_a_receber_retencoes');
        $this->dropTable('diretorias');
        $this->dropTable('empresas');
        $this->dropTable('empresas_enderecos');
        $this->dropTable('empresas_forma_trabalhos');
        $this->dropTable('empresas_forma_tributacoes');
        $this->dropTable('empresas_telefones');
        $this->dropTable('empresas_tipos');
        $this->dropTable('forma_pagamentos');
        $this->dropTable('forma_recebimentos');
        $this->dropTable('forma_trabalhos');
        $this->dropTable('fornecedores');
        $this->dropTable('fornecedores_telefones');
        $this->dropTable('gerencias');
        $this->dropTable('retencoes');
        $this->dropTable('setores');
    }
}
