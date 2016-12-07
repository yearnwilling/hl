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

    public function searchActiveCount($condition)
    {
        return $this->getActiveDao()->searchActiveCount($condition);
    }

    public function searchActive(array $conditions, array $orderBy, $start, $limit)
    {
        $actives = $this->getActiveDao()->searchActive($conditions, $orderBy, $start, $limit);
        foreach ($actives as &$active) {
            $active['community'] = $this->getCommunityService()->getCommunity($active['community_id']);
        }
        return $actives;
    }

    protected function getActiveDao()
    {
        return $this->createDao('AppBundle:Community.ActiveDao');
    }

    protected function getCommunityService()
    {
        return $this->createService('AppBundle:Community.CommunityService');
    }
}