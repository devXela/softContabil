<div class="bancos col-xs-12">
	<div class="box">
		<div class="box-header">
			<h4><i class="fa fa-list"></i> Listagem</h4>
		</div>
		<div class="box-body">
		    <table id="bancos" class="table table-bordered table-hover">
			    <thead>
			        <tr>
			    			        <th><?= $this->Paginator->sort('id') ?></th>
			    			        <th><?= $this->Paginator->sort('codigo') ?></th>
			    			        <th><?= $this->Paginator->sort('nome') ?></th>
			    			        <th class="actions"><?= __('Ações') ?></th>
			        </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	if (empty($bancos->toArray())) {
			    		echo "<tr><td colspan='100%' class='text-center'>Não existem registros</td></tr>"; 
			    	}else{

			    	foreach ($bancos as $banco): 
			    ?>
				        <tr>
								            <td><?= $this->Number->format($banco->id) ?></td>
								            <td><?= $this->Number->format($banco->codigo) ?></td>
								            <td><?= h($banco->nome) ?></td>
								            <td class="actions">
				                <?= $this->Html->link(__('View'), ['action' => 'view', $banco->id]) ?>
				                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banco->id]) ?>
				                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?>
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
		$('#bancos').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});

</script>