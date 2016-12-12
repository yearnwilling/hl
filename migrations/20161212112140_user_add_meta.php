<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Types\Type;

class UserAddMeta extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column[]    = new Column('meta', Type::getType('string'), array(
            'length'   => 100,
            'null'     => false,
            'default'  => '',
            'comment'  => '附加信息',
        ));
        $table = new TableDiff('user', $column);
        $container['db']->getSchemaManager()->alterTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
