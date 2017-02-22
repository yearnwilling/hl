<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 17/2/21
 * Time: 下午4:39
 */

namespace AppBundle\Service\Area\Dao\Impl;


use AppBundle\Service\Area\Dao\AreaDao;
use AppBundle\Service\Common\BaseDao;

class AreaDaoImpl extends BaseDao implements AreaDao
{
    protected  $table = 'area';

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->fetchAll($sql) ?: null;
    }
}