<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Schema\ColumnDiff;
use Doctrine\DBAL\Types\Type;

class UserChageMate extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column    = new Column('meta', Type::getType('string'), array(
            'length'  => 500,
            'null'    => false,
            'default' => '',
            'comment' => ''
        ));
        $columnDiff = new ColumnDiff('meta', $column);
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
