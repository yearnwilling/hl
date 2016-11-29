<?php

use Phpmig\Migration\Migration;

use Doctrine\DBAL\Schema\Table;

class Community extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table     = new Table('community');
        $table->addColumn('id', 'integer', array(
            'unsigned'      => true,
            'autoincrement' => true
        ));
        $table->addColumn('name', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '社团名称'
        ));
        $table->addColumn('principal', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '负责人(社长)'
        ));
        $table->setPrimaryKey(array('id'));
        $table->addOption("comment", '社团表');
        $container['db']->getSchemaManager()->createTable($table);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
