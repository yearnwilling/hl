<?php

use Phpmig\Migration\Migration;

use Doctrine\DBAL\Schema\Table;

class Active extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table     = new Table('community_active');
        $table->addColumn('id', 'integer', array(
            'unsigned'      => true,
            'autoincrement' => true
        ));
        $table->addColumn('name', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '活动名称'
        ));
        $table->addColumn('created_time', 'integer', array(
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '创建时间'
        ));
        $table->addColumn('community_id', 'integer', array(
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '社团id'
        ));
        $table->addColumn('icon_id', 'integer', array(
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '表情图片id'
        ));
        $table->addColumn('info', 'text', array(
            'default' => '',
            'comment' => '活动名称'
        ));
        $table->setPrimaryKey(array('id'));
        $table->addOption("comment", '社团活动');
        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
