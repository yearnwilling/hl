<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Types\Type;

class CommunityAddCreateTime extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column[]    = new Column('create_time', Type::getType('integer'), array(
            'length'   => 100,
            'null'     => false,
            'default'  => 0,
            'comment'  => '创建时间',
            'unsigned' => true,
        ));
        $table = new TableDiff('community', $column);
        $container['db']->getSchemaManager()->alterTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
