<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/11
 * Time: 下午5:28
 */

namespace AppBundle\Service\User\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\User\UserService;

class UserServiceImpl extends BaseService implements UserService
{
    public function getUserByUsername($username)
    {
        return $this->getUserDao()->findUserByNickname($username);
    }

    protected function getUserDao()
    {
        return $this->createDao('AppBundle:User.UserDao');
    }
}