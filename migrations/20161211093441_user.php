<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Table;

class User extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table     = new Table('user');
        $table->addColumn('id', 'integer', array(
            'unsigned'      => true,
            'autoincrement' => true
        ));
        $table->addColumn('username', 'string', array(
            'length'  => 64,
            'null'    => false,
            'default' => '',
            'comment' => '昵称,可做登录'
        ));
        $table->addColumn('password', 'string', array(
            'length'  => 32,
            'null'    => false,
            'default' => '',
            'comment' => '登录密码'
        ));
        $table->addColumn('salt', 'string', array(
            'length'  => 64,
            'null'    => false,
            'default' => '',
            'comment' => '登录密码'
        ));
        $table->addColumn('roles', 'string', array(
            'length'  => 255,
            'null'    => false,
            'default' => '',
            'comment' => '角色'
        ));
        $table->addColumn('created_time', 'integer', array(
            'unsigned' => true,
            'default'  => 0,
            'comment'  => '注册时间'
        ));
        $table->addColumn('update_time', 'integer', array(
            'unsigned' => true,
            'default'  => 0,
            'signed'   => true,
            'comment'  => '更新时间'
        ));
        $table->setPrimaryKey(array('id'));
        $table->addOption("comment", '用户表');
        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
