<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Types\Type;

class MemberAddCommunityId extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column[]    = new Column('community_id', Type::getType('integer'), array(
            'length'   => 10,
            'null'     => false,
            'default'  => 0,
            'comment'  => '社团id',
            'unsigned' => true,
        ));
        $table = new TableDiff('member', $column);
        $container['db']->getSchemaManager()->alterTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
