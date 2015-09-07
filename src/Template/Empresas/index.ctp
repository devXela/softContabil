<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">Empresas cadastradas</h3>
			<div class="box-tools">
				<div class="input-group" style="width: 150px;">
					<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
			<table class="table table-hover">
				<tbody>
				<thead>
					<!-- <th class="text-center">ID</th> -->
					<th class="text-center">Nome</th>
					<th class="text-center">Atividade empresas</th>
					<th class="text-center">Tipo empresa</th>
					<th class="text-center">CNPJ</th>
					<!-- <th class="text-center">Status</th> -->
					<th class="text-center">Email</th>
					<th class="text-center">&nbsp;</th>
				</thead>
				<tbody>
					<?php 
						if (empty($empresas->toArray())) {
							echo "<tr><td colspan='7'class='text-center'>Não existem empresas cadastradas</td></tr>";
						}else{
							foreach ($empresas as $empresa): 
					?>
						<tr class="text-center">
							<td><?= h($empresa->nome_empresa) ?></td>
							<td>
								<?= $empresa->has('atividade_empresa') ? $this->Html->link($empresa->atividade_empresa->descricao, ['controller' => 'AtividadeEmpresas', 'action' => 'view', $empresa->atividade_empresa->id]) : '' ?>
							</td>
							<td><?= $this->Number->format($empresa->tipo_empresa_id) ?></td>
							<td><?= $this->Number->format($empresa->cnpj) ?></td>
							<!-- <td><?= h($empresa->status) ?></td> -->
							<td><?= h($empresa->email) ?></td>
							<td class="actions">
								<button class="btn btn-info btn-sm"><?= $this->Html->link('<i class="fa fa-eye"></i> Ver', ['action' => 'view', $empresa->id], ['escape' => false]) ?></button>
								<button class="btn btn-warning btn-sm"><?= $this->Html->link('<i class="fa fa-edit"></i> Editar', ['action' => 'edit', $empresa->id], ['escape' => false]) ?></button>
								<button class="btn btn-danger btn-sm"><?= $this->Form->postLink('<i class="fa fa-trash-o"></i> Excluir', ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'escape' => false]) ?></button>
							</td>
						</tr>

					<?php
							endforeach;
						}
					?>
				</tbody>
			</table>
		</div>
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				<li><a href="#">«</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">»</a></li>
			</ul>
		</div>		
	</div>
</div>