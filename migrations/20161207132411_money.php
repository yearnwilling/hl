<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Table;

class Money extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table     = new Table('money');
        $table->addColumn('id', 'integer', array(
            'unsigned'      => true,
            'autoincrement' => true
        ));
        $table->addColumn('created_time', 'integer', array(
            'length' => 10,
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '创建时间'
        ));
        $table->addColumn('community_id', 'integer', array(
            'length' => 10,
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '社团id'
        ));
        $table->addColumn('type', 'string', array(
            'length'  => 10,
            'null'    => false,
            'default' => '',
            'comment' => ' 类型（in，out)'
        ));
        $table->addColumn('info', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '来源去向'
        ));
        $table->addColumn('community_member', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '人员'
        ));

        $table->setPrimaryKey(array('id'));
        $table->addOption("comment", '社团经费');
        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
