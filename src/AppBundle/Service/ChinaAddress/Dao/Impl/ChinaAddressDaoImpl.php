<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 17/2/22
 * Time: 上午10:28
 */

namespace AppBundle\Service\ChinaAddress\Dao\Impl;


use AppBundle\Service\ChinaAddress\Dao\ChinaAddressDao;
use AppBundle\Service\Common\BaseDao;

class ChinaAddressDaoImpl extends BaseDao implements ChinaAddressDao
{
    protected $table = 'china_address_api';

    public function getLikeName($name)
    {
        $name = "%{$name}%";
        $sql = "SELECT * FROM {$this->table} WHERE region_name_cn LIKE ?";
        return $this->fetchAll($sql, array($name)) ?: null;
    }

    public function update($id, $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('region_id' => $id));
        return $this->getById($id);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE region_id = ?";
        $sql = $this->modifyLimitQuery($sql, 1);
        return $this->fetchAssoc($sql, array($id)) ?: null;
    }
}