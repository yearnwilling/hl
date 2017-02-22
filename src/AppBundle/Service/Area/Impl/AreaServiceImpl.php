<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 17/2/21
 * Time: 下午4:38
 */

namespace AppBundle\Service\Area\Impl;


use AppBundle\Service\Area\AreaService;
use AppBundle\Service\Common\BaseService;

class AreaServiceImpl extends BaseService implements AreaService
{
    public function getAll()
    {
        return $this->getAreaDao()->getAll();
    }

    protected function getAreaDao()
    {
        return $this->createDao('AppBundle:Area.AreaDao');
    }
}