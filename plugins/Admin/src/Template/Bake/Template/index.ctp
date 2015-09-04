<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    })
    ->take(7);
%>
<div class="<%= $pluralVar %> col-xs-12">
	<div class="box">
		<div class="box-header">
			<h4><i class="fa fa-list"></i> Listagem</h4>
		</div>
		<div class="box-body">
		    <table id="<%= $pluralVar %>" class="table table-bordered table-hover">
			    <thead>
			        <tr>
			    <% foreach ($fields as $field): %>
			        <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
			    <% endforeach; %>
			        <th class="actions"><?= __('Ações') ?></th>
			        </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	if (empty($<%= $pluralVar %>->toArray())) {
			    		echo "<tr><td colspan='100%' class='text-center'>Não existem registros</td></tr>"; 
			    	}else{

			    	foreach ($<%= $pluralVar %> as $<%= $singularVar %>): 
			    ?>
				        <tr>
				<%        foreach ($fields as $field) {
				            $isKey = false;
				            if (!empty($associations['BelongsTo'])) {
				                foreach ($associations['BelongsTo'] as $alias => $details) {
				                    if ($field === $details['foreignKey']) {
				                        $isKey = true;
				%>
				            <td>
				                <?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?>
				            </td>
				<%
				                        break;
				                    }
				                }
				            }
				            if ($isKey !== true) {
				                if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
				%>
				            <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
				<%
				                } else {
				%>
				            <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
				<%
				                }
				            }
				        }

				        $pk = '$' . $singularVar . '->' . $primaryKey[0];
				%>
				            <td class="actions">
				                <?= $this->Html->link(__('View'), ['action' => 'view', <%= $pk %>]) ?>
				                <?= $this->Html->link(__('Edit'), ['action' => 'edit', <%= $pk %>]) ?>
				                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', <%= $pk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>)]) ?>
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
		$('#<%= $pluralVar %>').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});

</script>