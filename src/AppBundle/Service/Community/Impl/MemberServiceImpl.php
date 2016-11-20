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

    protected function getMemberDao()
    {
        return $this->createDao('AppBundle:Community.MemberDao');
    }
}