<div class="clientes col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
				<?= 'Adicionar ' .' '. 'cliente' ?>
			</h3>
		</div>
		<?= $this->Form->create($cliente) ?>
		<div class="box-body">
			<?= $this->Form->input('empresa_id', ['options' => $empresas]) ?>
			<?= $this->Form->input('clientes_categorias_id', ['options' => $ClientesCategorias]) ?>
			<?= $this->Form->input('identificacao', [ 'placeholder' => ucfirst('identificacao') ]) ?>
			<?= $this->Form->input('nome', [ 'placeholder' => ucfirst('nome') ]) ?>
			<?= $this->Form->input('email', [ 'placeholder' => ucfirst('email') ]) ?>
			<?= $this->Form->input('responsavel', [ 'placeholder' => ucfirst('responsavel') ]) ?>
			<?= $this->Form->input('limite_credito', [ 'placeholder' => ucfirst('limite_credito') ]) ?>
			<?= $this->Form->input('percentual_multa', [ 'placeholder' => ucfirst('percentual_multa') ]) ?>
			<?= $this->Form->input('percentual_juros', [ 'placeholder' => ucfirst('percentual_juros') ]) ?>
			<?= $this->Form->button('<i class="fa fa-save"></i> Salvar') ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
