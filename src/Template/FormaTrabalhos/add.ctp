<div class="formaTrabalhos col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
				<?= 'Adicionar ' .' '. 'formaTrabalho' ?>
			</h3>
		</div>
		<?= $this->Form->create($formaTrabalho) ?>
		<div class="box-body">
			<?= $this->Form->input('descricao', [ 'placeholder' => ucfirst('descricao') ]) ?>
			<!-- <?= $this->Form->input('empresas_id', ['options' => $empresas]) ?> -->
			<?= $this->Form->button('<i class="fa fa-save"></i> Salvar') ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
