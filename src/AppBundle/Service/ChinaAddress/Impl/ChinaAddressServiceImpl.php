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
    public function findChinaAddressLikeName($name)
    {
        return $this->getChinaAddressDao()->getLikeName($name);
    }

    public function updateChinaAddressName($id, $name)
    {
        return $this->getChinaAddressDao()->update($id, array('region_name_cn' => $name));
    }

    public function getChinaAddressDao()
    {
        return $this->createDao('AppBundle:ChinaAddress.ChinaAddressDao');
    }
}