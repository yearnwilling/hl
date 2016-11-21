<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/20
 * Time: 下午3:09
 */

namespace AppBundle\Service\Community\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Community\MemberService;

class MemberServiceImpl extends BaseService implements MemberService
{
    public function findAllMember()
    {
        return $this->getMemberDao()->findAll();
    }

    public function addMember($fields)
    {
        return $this->getMemberDao()->create($fields);
    }

    public function getMemberById($id)
    {
        return $this->getMemberDao()->getMember($id);
    }

    public function updateMember($id,$fields)
    {
        return $this->getMemberDao()->update($id, $fields);
    }

    public function deleteMember($id)
    {
        return $this->getMemberDao()->delete($id);
    }

    public function searchMemberCount($condition)
    {
        return $this->getMemberDao()->searchMemberCount($condition);
    }

    public function searchMember(array $conditions, array $orderBy, $start, $limit)
    {
        return $this->getMemberDao()->searchMember($conditions, $orderBy, $start, $limit);
    }

    protected function getMemberDao()
    {
        return $this->createDao('AppBundle:Community.MemberDao');
    }
}