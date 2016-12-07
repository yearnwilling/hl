<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/7
 * Time: 下午9:43
 */

namespace AppBundle\Service\Community\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Community\MoneyService;

class MoneyServiceImpl extends BaseService implements MoneyService
{
    public function addMoney($money)
    {
        $money['created_time'] = time();
        return $this->getMoneyDao()->create($money);
    }

    protected function getMoneyDao()
    {
        return $this->createDao('AppBundle:Community.MoneyDao');
    }
}