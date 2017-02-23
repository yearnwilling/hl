<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 17/2/22
 * Time: 上午10:26
 */

namespace AppBundle\Service\ChinaAddress\Impl;


use AppBundle\Service\ChinaAddress\ChinaAddressService;
use AppBundle\Service\Common\BaseService;

class ChinaAddressServiceImpl extends BaseService implements ChinaAddressService
{
    public function findChinaAddressLikeName($name, $parentId)
    {
        return $this->getChinaAddressDao()->getLikeName($name, $parentId);
    }

    public function updateChinaAddressName($id, $name)
    {
        return $this->getChinaAddressDao()->update($id, array('region_name_cn' => $name));
    }

    public function getLastRegionId()
    {
        $last = $this->getChinaAddressDao()->getLast();
        return $last['region_id'];
    }

    public function createChinaAddress($chinaAddress)
    {
        return $this->getChinaAddressDao()->create($chinaAddress);
    }

    public function getChinaAddressByRegionId($id)
    {
        return $this->getChinaAddressDao()->getById($id);
    }

    public function getChinaAddressDao()
    {
        return $this->createDao('AppBundle:ChinaAddress.ChinaAddressDao');
    }
}