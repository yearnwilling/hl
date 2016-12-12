<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Schema\ColumnDiff;
use Doctrine\DBAL\Types\Type;

class UserChagePw extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column    = new Column('password', Type::getType('string'), array(
            'length'  => 64,
            'null'    => false,
            'default' => '',
            'comment' => '登录密码'
        ));
        $columnDiff = new ColumnDiff('password', $column);
        $table      = new TableDiff('user', array(), array($columnDiff));
        $container['db']->getSchemaManager()->alterTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
