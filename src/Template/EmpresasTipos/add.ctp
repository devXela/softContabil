<div class="empresasTipos col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
				<?= 'Adicionar ' .' '. 'empresasTipo' ?>
			</h3>
		</div>
		<?= $this->Form->create($empresasTipo) ?>
		<div class="box-body">
			<?= $this->Form->input('descricao', [ 'placeholder' => ucfirst('descricao') ]) ?>
			<?= $this->Form->button('<i class="fa fa-save"></i> Salvar') ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
