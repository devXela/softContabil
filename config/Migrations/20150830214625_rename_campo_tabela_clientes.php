<?php

use Phinx\Migration\AbstractMigration;

class RenameCampoTabelaClientes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $table = $this->table('clientes');
        $table->renameColumn('categoria_clientes_id', 'clientes_categorias_id');
    }
}
