<div class="contaEmpresas col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
				<?= 'Adicionar ' .' '. 'contaEmpresa' ?>
			</h3>
		</div>
		<?= $this->Form->create($contaEmpresa) ?>
		<div class="box-body">
			<?= $this->Form->input('empresa_id', ['options' => $empresas]) ?>
			<?= $this->Form->input('banco_id', ['options' => $bancos]) ?>
			<?= $this->Form->input('conta_empresas_gerentes_id', ['options' => $contaEmpresasGerentes]) ?>
			<?= $this->Form->input('conta_empresas_tipos_id', ['options' => $contaEmpresasTipos]) ?>
			<?= $this->Form->input('nome_conta', [ 'placeholder' => ucfirst('nome_conta') ]) ?>
			<?= $this->Form->input('agencia', [ 'placeholder' => ucfirst('agencia') ]) ?>
			<?= $this->Form->input('numero_conta', [ 'placeholder' => ucfirst('numero_conta') ]) ?>
			<?= $this->Form->input('limite', [ 'placeholder' => ucfirst('limite') ]) ?>
			<?= $this->Form->input('desconto_cartao', [ 'placeholder' => ucfirst('desconto_cartao') ]) ?>
			<?= $this->Form->input('saldo_abertura', [ 'placeholder' => ucfirst('saldo_abertura') ]) ?>
			<?= $this->Form->button('<i class="fa fa-save"></i> Salvar') ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
