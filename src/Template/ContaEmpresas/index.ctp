<div class="contaEmpresas col-xs-12">
	<div class="box">
		<div class="box-header">
			<h4><i class="fa fa-list"></i> Listagem</h4>
		</div>
		<div class="box-body">
		    <table id="contaEmpresas" class="table table-bordered table-hover">
			    <thead>
			        <tr>
			    			        <th><?= $this->Paginator->sort('id') ?></th>
			    			        <th><?= $this->Paginator->sort('empresa_id') ?></th>
			    			        <th><?= $this->Paginator->sort('banco_id') ?></th>
			    			        <th><?= $this->Paginator->sort('conta_empresas_gerentes_id') ?></th>
			    			        <th><?= $this->Paginator->sort('conta_empresas_tipos_id') ?></th>
			    			        <th><?= $this->Paginator->sort('nome_conta') ?></th>
			    			        <th><?= $this->Paginator->sort('agencia') ?></th>
			    			        <th class="actions"><?= __('Ações') ?></th>
			        </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	if (empty($contaEmpresas->toArray())) {
			    		echo "<tr><td colspan='100%' class='text-center'>Não existem registros</td></tr>"; 
			    	}else{

			    	foreach ($contaEmpresas as $contaEmpresa): 
			    ?>
				        <tr>
								            <td><?= $this->Number->format($contaEmpresa->id) ?></td>
								            <td>
				                <?= $contaEmpresa->has('empresa') ? $this->Html->link($contaEmpresa->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $contaEmpresa->empresa->id]) : '' ?>
				            </td>
								            <td>
				                <?= $contaEmpresa->has('banco') ? $this->Html->link($contaEmpresa->banco->nome, ['controller' => 'Bancos', 'action' => 'view', $contaEmpresa->banco->id]) : '' ?>
				            </td>
								            <td>
				                <?= $contaEmpresa->has('conta_empresas_gerente') ? $this->Html->link($contaEmpresa->conta_empresas_gerente->nome, ['controller' => 'ContaEmpresasGerentes', 'action' => 'view', $contaEmpresa->conta_empresas_gerente->id]) : '' ?>
				            </td>
								            <td>
				                <?= $contaEmpresa->has('conta_empresas_tipo') ? $this->Html->link($contaEmpresa->conta_empresas_tipo->id, ['controller' => 'ContaEmpresasTipos', 'action' => 'view', $contaEmpresa->conta_empresas_tipo->id]) : '' ?>
				            </td>
								            <td><?= h($contaEmpresa->nome_conta) ?></td>
								            <td><?= $this->Number->format($contaEmpresa->agencia) ?></td>
								            <td class="actions">
				                <?= $this->Html->link(__('View'), ['action' => 'view', $contaEmpresa->id]) ?>
				                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contaEmpresa->id]) ?>
				                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contaEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contaEmpresa->id)]) ?>
				            </td>
				        </tr>

				    <?php endforeach; 
			    	}?>
			    </tbody>
		    </table>
		</div>
	</div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <!-- <p><?= $this->Paginator->counter() ?></p> -->
    </div>
</div>
<script type="text/javascript">
	$(function () {
		$('#contaEmpresas').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});

</script>