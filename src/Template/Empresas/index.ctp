<div class="empresas col-xs-12">
	<div class="box">
		<div class="box-header">
			<h4><i class="fa fa-list"></i> Listagem</h4>
		</div>
		<div class="box-body">
		    <table id="empresas" class="table table-bordered table-hover">
			    <thead>
			        <tr>
			    			        <!-- <th><?= $this->Paginator->sort('id') ?></th> -->
			    			        <th class="text-center"><?= $this->Paginator->sort('atividade_empresa_id') ?></th>
			    			        <th class="text-center"><?= $this->Paginator->sort('empresas_tipos_id') ?></th>
			    			        <th class="text-center"><?= $this->Paginator->sort('empresas_forma_tributacao_id') ?></th>
			    			        <th class="text-center"><?= $this->Paginator->sort('cnpj') ?></th>
			    			        <th class="text-center"><?= $this->Paginator->sort('email') ?></th>
			    			        <th class="text-center"><?= $this->Paginator->sort('nome_empresa') ?></th>
			    			        <th class="actions text-center"><?= __('Ações') ?></th>
			        </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	if (empty($empresas->toArray())) {
			    		echo "<tr><td colspan='100%' class='text-center'>Não existem registros</td></tr>"; 
			    	}else{

			    	foreach ($empresas as $empresa): 
			    ?>
				        <tr class="text-center">
								            <!-- <td><?= $this->Number->format($empresa->id) ?></td> -->
								            <td>
				                <?= $empresa->has('atividade_empresa') ? $this->Html->link($empresa->atividade_empresa->descricao, ['controller' => 'AtividadeEmpresas', 'action' => 'view', $empresa->atividade_empresa->id]) : '' ?>
				            </td>
								            <td>
				                <?= $empresa->has('empresas_tipo') ? $this->Html->link($empresa->empresas_tipo->descricao, ['controller' => 'EmpresasTipos', 'action' => 'view', $empresa->empresas_tipo->id]) : '' ?>
				            </td>
								            <td>
				                <?= $empresa->has('empresas_forma_tributacao') ? $this->Html->link($empresa->empresas_forma_tributacao->descricao, ['controller' => 'EmpresasFormaTributacoes', 'action' => 'view', $empresa->empresas_forma_tributacao->id]) : '' ?>
				            </td>
								            <td><?= $this->Number->format($empresa->cnpj) ?></td>
								            <td><?= h($empresa->email) ?></td>
								            <td><?= h($empresa->nome_empresa) ?></td>
								            <td class="actions">
				                <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
				                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
				                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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
		$('#empresas').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});

</script>