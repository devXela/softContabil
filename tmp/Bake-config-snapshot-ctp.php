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
 * @since         3.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$wantedOptions = array_flip(['length', 'limit', 'default', 'unsigned', 'null']);
$tableMethod = $this->Migration->tableMethod($action);
$columnMethod = $this->Migration->columnMethod($action);
$indexMethod = $this->Migration->indexMethod($action);
$constraints = $foreignKeys = $dropForeignKeys = [];
?>
<CakePHPBakeOpenTagphp
use Phinx\Migration\AbstractMigration;

class <?= $name ?> extends AbstractMigration
{
    public function up()
    {
<?php foreach ($tables as $table):
        $foreignKeys = [];
        $primaryKeysColumns = $this->Migration->primaryKeysColumnsList($table);
        $primaryKeys = $this->Migration->primaryKeys($table);
        $specialPk = count($primaryKeys) > 1 || $primaryKeys[0]['name'] !== 'id' || $primaryKeys[0]['info']['columnType'] !== 'integer';
        if ($specialPk):
        ?>
        $table = $this->table('<?= $table?>', ['id' => false, 'primary_key' => ['<?= implode("', '", \Cake\Utility\Hash::extract($primaryKeys, '{n}.name')) ?>']]);
<?php else: ?>
        $table = $this->table('<?= $table?>');
<?php endif; ?>
        $table
<?php if ($specialPk):
            foreach ($primaryKeys as $primaryKey) : ?>
            -><?= $columnMethod ?>('<?= $primaryKey['name'] ?>', '<?= $primaryKey['info']['columnType'] ?>', [<?php
                $options = [];
                $columnOptions = array_intersect_key($primaryKey['info']['options'], $wantedOptions);
                echo $this->Migration->stringifyList($columnOptions, ['indent' => 4]);
            ?>])
<?php endforeach;
            endif;
        foreach ($this->Migration->columns($table) as $column => $config): ?>
            -><?= $columnMethod ?>('<?= $column ?>', '<?= $config['columnType'] ?>', [<?php
                $options = [];
                $columnOptions = array_intersect_key($config['options'], $wantedOptions);
                echo $this->Migration->stringifyList($columnOptions, ['indent' => 4]);
            ?>])
<?php endforeach;
            $tableConstraints = $this->Migration->constraints($table);
            if (!empty($tableConstraints)):
                sort($tableConstraints);
                $constraints[$table] = $tableConstraints;

                foreach ($constraints[$table] as $name => $constraint):
                    if ($constraint['type'] !== 'unique'):
                        $foreignKeys[] = $constraint['columns'];
                    endif;
                    if ($constraint['columns'] !== $primaryKeysColumns): ?>
            ->addIndex(
                [<?php echo $this->Migration->stringifyList($constraint['columns'], ['indent' => 5]); ?>]<?php echo ($constraint['type'] === 'unique') ? ',' : ''; ?>

<?php if ($constraint['type'] === 'unique'): ?>
                ['unique' => true]
<?php endif; ?>
            )
<?php endif;
                endforeach;
            endif;

            foreach($this->Migration->indexes($table) as $index):
                sort($foreignKeys);
                $indexColumns = $index['columns'];
                sort($indexColumns);
                if (in_array($foreignKeys, $indexColumns)):
                ?>
                ->addIndex(
                    [<?php
                        echo $this->Migration->stringifyList($index['columns'], ['indent' => 5]);
                    ?>]
                )
<?php endif;
            endforeach; ?>
            -><?= $tableMethod ?>();

<?php endforeach; ?>
<?php foreach ($constraints as $table => $tableConstraints):
            foreach ($tableConstraints as $constraint):
                $constraintColumns = $constraint['columns'];
                sort($constraintColumns);
                if ($constraint['type'] !== 'unique'):
                    $columnsList = '\'' . $constraint['columns'][0] . '\'';
                    if (count($constraint['columns']) > 1):
                        $columnsList = '[' . $this->Migration->stringifyList($constraint['columns'], ['indent' => 5]) . ']';
                    endif;
                    $dropForeignKeys[$table][] = $columnsList;

                    if (is_array($constraint['references'][1])):
                        $columnsReference = '[' . $this->Migration->stringifyList($constraint['references'][1], ['indent' => 5]) . ']';
                    else:
                        $columnsReference = '\'' . $constraint['references'][1] . '\'';
                    endif;
                    $statement = $this->Migration->tableStatement($table);
                    if (!empty($statement)): ?>
        <?= $statement ?>

<?php endif; ?>
            ->addForeignKey(
                <?= $columnsList ?>,
                '<?= $constraint['references'][0] ?>',
                <?= $columnsReference ?>,
                [
                    'update' => '<?= $constraint['update'] ?>',
                    'delete' => '<?= $constraint['delete'] ?>'
                ]
            )
<?php endif; ?>
<?php endforeach; ?>
<?php if (isset($this->Migration->tableStatements[$table])): ?>
            ->update();

<?php endif; ?>
<?php endforeach; ?>
    }

    public function down()
    {
<?php foreach ($dropForeignKeys as $table => $columnsList): ?>
        $this->table('<?= $table ?>')
<?php foreach ($columnsList as $columns): ?>
            ->dropForeignKey(
                <?= $columns ?>

            )
<?php endforeach; ?>
            ->update();

<?php endforeach; ?>
<?php foreach ($tables as $table): ?>
        $this->dropTable('<?= $table?>');
<?php endforeach; ?>
    }
}
