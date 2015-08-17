<div class="col-lg-12">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Adicionar nova Empresa</h3>
		</div>
		<form role="form">
			<div class="box-body">
				<div class="form-group">
					<?php
						echo $this->Form->input('atividade_empresa_id', ['options' => $atividadeEmpresas, 'class' => 'form-control'])
					?>
					<!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('empresas_tipos_id', ['options' => $EmpresasTipos, 'class' => 'form-control']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('empresas_forma_tributacao_id', ['options' => $EmpresasFormaTributacoes, 'class' => 'form-control']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('cnpj', ['class' => 'form-control', 'placeholder' => 'Coloque seu CNPJ']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Coloque seu email']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('nome_empresa', ['class' => 'form-control', 'placeholder' => 'Coloque o nome da empresa']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('percentual_juros', ['class' => 'form-control', 'placeholder' => 'Coloque o percentual do juros']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('percentual_multa', ['class' => 'form-control', 'placeholder' => 'Coloque o percentual da multa']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('forma_trabalhos', ['options' => $formaTrabalhos, 'class' => 'form-control']);
					?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>        
	</div>
</div>


<!--     <div class="empresas form large-10 medium-9 columns">
		<?= $this->Form->create($empresa) ?>
		<fieldset>
			<legend><?= __('Add Empresa') ?></legend>
			<?php
				echo $this->Form->input('atividade_empresa_id', ['options' => $atividadeEmpresas]);
				echo $this->Form->input('empresas_tipos_id', ['options' => $EmpresasTipos]);
				echo $this->Form->input('cnpj');
				echo $this->Form->input('email');
				echo $this->Form->input('nome_empresa');
				echo $this->Form->input('percentual_juros');
				echo $this->Form->input('percentual_multa');
				echo $this->Form->input('forma_trabalhos._ids', ['options' => $formaTrabalhos]);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit')) ?>
		<?= $this->Form->end() ?>
	</div>
 -->