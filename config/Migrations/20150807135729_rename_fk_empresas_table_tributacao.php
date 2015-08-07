<?php

use Phinx\Migration\AbstractMigration;

class RenameFkEmpresasTableTributacao extends AbstractMigration
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
        $table = $this->table('empresas');
        $table->renameColumn('forma_tributacao_empresa_id', 'empresas_forma_tributacao_id');
    }
}
