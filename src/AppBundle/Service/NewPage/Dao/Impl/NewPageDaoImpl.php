<?php

namespace AppBundle\Service\NewPage\Dao\Impl;

use AppBundle\Service\NewPage\Dao\NewPageDao;
use AppBundle\Service\Common\BaseDao;

class NewPageDaoImpl extends BaseDao implements NewPageDao
{
    protected $table = 'index_artcal';

//    public function test()
//    {
//        $affected = $this->getConnection()->insert(self::TABLENAME, array('name'=>'123','sex'=>'nan'));
//
//        if ($affected <= 0) {
//            throw $this->createDaoException('Insert course error.');
//        }
//        return 1;
//    }


    public function getIndexArtical()
    {
        $sql = "SELECT * FROM {$this->table} ";
        $sql = $this->modifyLimitQuery($sql,4,0);
        return $this->fetchAll($sql) ?: null;
    }
}