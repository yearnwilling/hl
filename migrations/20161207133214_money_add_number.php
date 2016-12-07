<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Types\Type;

class MoneyAddNumber extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column[]    = new Column('number', Type::getType('string'), array(
            'length'   => 101,
            'null'     => false,
            'default'  => 0,
            'comment'  => '金额',
        ));
        $table = new TableDiff('money', $column);
        $container['db']->getSchemaManager()->alterTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
