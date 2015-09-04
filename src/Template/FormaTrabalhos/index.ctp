<div class="formaTrabalhos col-xs-12">
	<div class="box">
		<div class="box-header">
			<h4><i class="fa fa-list"></i> Listagem</h4>
		</div>
		<div class="box-body">
		    <table id="formaTrabalhos" class="table table-bordered table-hover">
			    <thead>
			        <tr>
			    			        <th><?= $this->Paginator->sort('id') ?></th>
			    			        <th><?= $this->Paginator->sort('descricao') ?></th>
			    			        <th class="actions"><?= __('Ações') ?></th>
			        </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	if (empty($formaTrabalhos->toArray())) {
			    		echo "<tr><td colspan='100%' class='text-center'>Não existem registros</td></tr>"; 
			    	}else{

			    	foreach ($formaTrabalhos as $formaTrabalho): 
			    ?>
				        <tr>
								            <td><?= $this->Number->format($formaTrabalho->id) ?></td>
								            <td><?= h($formaTrabalho->descricao) ?></td>
								            <td class="actions">
				                <?= $this->Html->link(__('View'), ['action' => 'view', $formaTrabalho->id]) ?>
				                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formaTrabalho->id]) ?>
				                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formaTrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formaTrabalho->id)]) ?>
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
		$('#formaTrabalhos').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});

</script>