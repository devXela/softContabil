<div class="atividadeEmpresas col-xs-12">
	<div class="box">
		<div class="box-header">
			<h4><i class="fa fa-list"></i> Listagem</h4>
		</div>
		<div class="box-body">
		    <table id="atividadeEmpresas" class="table table-bordered table-hover">
			    <thead>
			        <tr>
			    			        <th><?= $this->Paginator->sort('id') ?></th>
			    			        <th><?= $this->Paginator->sort('descricao') ?></th>
			    			        <th class="actions"><?= __('Ações') ?></th>
			        </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	if (empty($atividadeEmpresas->toArray())) {
			    		echo "<tr><td colspan='100%' class='text-center'>Não existem registros</td></tr>"; 
			    	}else{

			    	foreach ($atividadeEmpresas as $atividadeEmpresa): 
			    ?>
				        <tr>
								            <td><?= $this->Number->format($atividadeEmpresa->id) ?></td>
								            <td><?= h($atividadeEmpresa->descricao) ?></td>
								            <td class="actions">
				                <?= $this->Html->link(__('View'), ['action' => 'view', $atividadeEmpresa->id]) ?>
				                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atividadeEmpresa->id]) ?>
				                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atividadeEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividadeEmpresa->id)]) ?>
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
		$('#atividadeEmpresas').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});

</script>