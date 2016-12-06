<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/7
 * Time: 上午12:10
 */

namespace AppBundle\Service\Community\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Community\ActiveService;

class ActiveServiceImpl extends BaseService implements ActiveService
{
    public function addActive($active)
    {
        $active['created_time'] = time();
        $this->getActiveDao()->create($active);
    }

    protected function getActiveDao()
    {
        return $this->createDao('AppBundle:Community.ActiveDao');
    }
}