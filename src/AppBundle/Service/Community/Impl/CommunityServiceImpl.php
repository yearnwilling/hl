<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/5
 * Time: 下午11:22
 */

namespace AppBundle\Service\Community\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Community\CommunityService;

class CommunityServiceImpl extends BaseService implements CommunityService
{
    public function addCommunity($community)
    {
        $community['create_time'] = time();
        return $this->getCommunityDao()->create($community);
    }

    public function searchCommunityCount($condition)
    {
        return $this->getCommunityDao()->searchCommunityCount($condition);
    }

    public function searchCommunity(array $conditions, array $orderBy, $start, $limit)
    {
        return $this->getCommunityDao()->searchCommunity($conditions, $orderBy, $start, $limit);
    }

    public function getCommunity($id)
    {
        return $this->getCommunityDao()->getById($id);
    }

    protected function getCommunityDao()
    {
        return $this->createDao('AppBundle:Community.CommunityDao');
    }
}