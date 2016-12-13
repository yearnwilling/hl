<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Table;

class Memo extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table     = new Table('memo');
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
        $table->addColumn('content', 'string', array(
            'length' => 255,
            'default'  => '',
            'comment'  => '内容'
        ));
        $table->addColumn('memo', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '备注'
        ));

        $table->setPrimaryKey(array('id'));
        $table->addOption("comment", '备忘录表');
        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
