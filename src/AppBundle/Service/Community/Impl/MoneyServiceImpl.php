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

    public function searchMoneyCount($condition)
    {
        return $this->getMoneyDao()->searchMoneyCount($condition);
    }

    public function getMoney($id)
    {
        return $this->getMoneyDao()->getById($id);
    }

    public function updateMoney($id, $money)
    {
        return $this->getMoneyDao()->update($id, $money);
    }

    public function searchMoney(array $conditions, array $orderBy, $start, $limit)
    {
        return $this->getMoneyDao()->searchMoney($conditions, $orderBy, $start, $limit);
    }

    protected function getMoneyDao()
    {
        return $this->createDao('AppBundle:Community.MoneyDao');
    }
}