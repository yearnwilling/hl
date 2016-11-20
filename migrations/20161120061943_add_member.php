<?php
use Phpmig\Migration\Migration;

use Doctrine\DBAL\Schema\Table;

class AddMember extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table     = new Table('member');
        $table->addColumn('id', 'integer', array(
            'unsigned'      => true,
            'autoincrement' => true
        ));
        $table->addColumn('name', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '区域名称'
        ));
        $table->addColumn('sex', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '性别'
        ));
        $table->addColumn('department', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '部门'
        ));
        $table->addColumn('position', 'string', array(
            'length'  => 100,
            'null'    => false,
            'default' => '',
            'comment' => '职位'
        ));
        $table->addColumn('created_time', 'integer', array(
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '创建时间'
        ));
        $table->setPrimaryKey(array('id'));
        $table->addOption("comment", '部署区域表');
        $container['db']->getSchemaManager()->createTable($table);
//        var_dump($container['db']);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
