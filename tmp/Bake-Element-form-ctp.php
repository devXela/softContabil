<?php
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
	return $schema->columnType($field) !== 'binary';
});
?>
<div class="<?= $pluralVar ?> col-sm-12 ">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">
<?php 
				$action = '<?= Inflector::humanize($action) ?>';
				if ( $action == 'Add' ) {
					$indicaAction = 'Editar ';
				}else{
					$indicaAction = 'Adicionar ';
				}
?>
				<CakePHPBakeOpenTag= '<?= $indicaAction ?>' .' '. '<?= $singularVar ?>' CakePHPBakeCloseTag>
			</h3>
		</div>
		<CakePHPBakeOpenTag= $this->Form->create($<?= $singularVar ?>) CakePHPBakeCloseTag>
		<div class="box-body">
<?php
foreach ($fields as $field) {
	if (in_array($field, $primaryKey)) {
		continue;
	}
	if (isset($keyFields[$field])) {
		$fieldData = $schema->column($field);
		if (!empty($fieldData['null'])) {
?>
			<CakePHPBakeOpenTag= $this->Form->input('<?= $field ?>', ['options' => $<?= $keyFields[$field] ?>, 'empty' => true ]) CakePHPBakeCloseTag>
<?php
		} else {
?>
			<CakePHPBakeOpenTag= $this->Form->input('<?= $field ?>', ['options' => $<?= $keyFields[$field] ?>]) CakePHPBakeCloseTag>
<?php
		}
			continue;
	}
	if (!in_array($field, ['created', 'modified', 'updated'])) {
		$fieldData = $schema->column($field);
		if (($fieldData['type'] === 'date') && (!empty($fieldData['null']))) {
?>
			<CakePHPBakeOpenTag= $this->Form->input('<?= $field ?>', ['empty' => true, 'default' => '']) CakePHPBakeCloseTag>
<?php
		} else {
?>
			<CakePHPBakeOpenTag= $this->Form->input('<?= $field ?>', [ 'placeholder' => ucfirst('<?= $field ?>') ]) CakePHPBakeCloseTag>
<?php
		}
	}
}	
if (!empty($associations['BelongsToMany'])) {
	foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
?>
			<CakePHPBakeOpenTag= $this->Form->input('<?= $assocData['property'] ?>._ids', ['options' => $<?= $assocData['variable'] ?>]) CakePHPBakeCloseTag>
<?php
		}	
	}
?>
			<CakePHPBakeOpenTag= $this->Form->button('<i class="fa fa-save"></i> Salvar') CakePHPBakeCloseTag>
			<CakePHPBakeOpenTag= $this->Form->end() CakePHPBakeCloseTag>
		</div>
	</div>
</div>
