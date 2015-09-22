<div class="empresas col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
				<?= 'Adicionar ' .' '. 'empresa' ?>
			</h3>
		</div>
		<?= $this->Form->create($empresa) ?>
		<div class="box-body">
			<?= $this->Form->input('nome_empresa', [ 'placeholder' => ucfirst('nome empresa') ]) ?>
			<?= $this->Form->input('cnpj', [ 'placeholder' => ucfirst('cnpj') ]) ?>
			<?= $this->Form->input('email', [ 'placeholder' => ucfirst('email') ]) ?>
			<?= $this->Form->input('atividade_empresa_id', ['options' => $atividadeEmpresas]) ?>
			<!-- conta da empresa -->
			<?= $this->Form->input('bancos._ids',['options' => $bancos, 'type' => 'select']) ?>
			<?= $this->Form->input('contasEmpresas.nome_conta',['placeholder' => 'Preencha com o nome da conta']) ?>
			<?= $this->Form->input('contasEmpresas.agencia',['placeholder' => 'Preencha com a agencia']) ?>
			<?= $this->Form->input('contasEmpresas.numero_conta',['placeholder' => 'Preencha o numero da conta']) ?>
			<?= $this->Form->input('contasEmpresas.limite',['placeholder' => 'Preencha com o limite da conta']) ?>
			<?= $this->Form->input('contaEmpresasTipos._ids',['options' => $tipoConta, 'type' => 'select', 'label' => 'Tipo Conta']) ?>
			<?= $this->Form->input('contasEmpresas.desconto_cartao',['placeholder' => 'Preencha com o desconto do cartão da conta']) ?>

			<?= $this->Form->input('empresas_tipos_id', ['options' => $EmpresasTipos]) ?>
			<?= $this->Form->input('empresas_forma_tributacao_id', ['options' => $EmpresasFormaTributacoes]) ?>
			<?= $this->Form->input('forma_trabalhos_id', ['options' => $formaTrabalhos]) ?>
			<?= $this->Form->input('percentual_juros', [ 'placeholder' => ucfirst('percentual_juros') ]) ?>
			<?= $this->Form->input('percentual_multa', [ 'placeholder' => ucfirst('percentual_multa') ]) ?>
			<?= $this->Form->button('<i class="fa fa-save"></i> Salvar') ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
