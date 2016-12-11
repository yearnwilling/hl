<?php

use Phpmig\Migration\Migration;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Types\Type;

class PictureAddName extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $column[]    = new Column('name', Type::getType('string'), array(
            'length'   => 100,
            'null'     => false,
            'default'  => 0,
            'comment'  => '图片名称',
        ));
        $table = new TableDiff('picture', $column);
        $container['db']->getSchemaManager()->alterTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
