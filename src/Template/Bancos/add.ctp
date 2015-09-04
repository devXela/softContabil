<div class="bancos col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
				<?= 'Adicionar ' .' '. 'banco' ?>
			</h3>
		</div>
		<?= $this->Form->create($banco) ?>
		<div class="box-body">
			<?= $this->Form->input('codigo', [ 'placeholder' => ucfirst('codigo') ]) ?>
			<?= $this->Form->input('nome', [ 'placeholder' => ucfirst('nome') ]) ?>
			<?= $this->Form->button('<i class="fa fa-save"></i> Salvar') ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
