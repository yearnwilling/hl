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
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class UserServiceImpl extends BaseService implements UserService
{
    public function getUserByUsername($username)
    {
        return $this->getUserDao()->findUserByNickname($username);
    }

    public function updateUserInformation($fields)
    {
        $id = $this->getKernel()->getCurrentUser()->getId();
        $user = $this->getUserDao()->getUser($id);
        $user['meta'] = $this->processUserInformation($user['meta'], $fields);
        $this->getUserDao()->update($id, $user);
        return true;
    }

    public function getUserInformation()
    {
        $id = $this->getKernel()->getCurrentUser()->getId();
        $user = $this->getUserDao()->getUser($id);
        return json_decode($user['meta']);
    }

    public function register($user)
    {
        $user['salt'] = md5(time().mt_rand(0, 1000));
        $user['password'] = $this->getPasswordEncoder()->encodePassword($user['password'], $user['salt']);
        if (empty($user['roles'])) {
            $user['roles'] = array('ROLE_USER');
        }
        return $this->getUserDao()->create($user);
    }

    protected function getPasswordEncoder()
    {
        return new MessageDigestPasswordEncoder('sha256');
    }

    protected function processUserInformation($userMeta ,$fields)
    {
        $userMeta = json_decode($userMeta,true);
        foreach ($fields as $key => $value) {
            if (!empty($userMeta) && in_array($key, array_keys($userMeta))) {
                $userMeta[$key] = $value;
            } else {
                $userMeta[$key] = $value;
            }
        }

        return json_encode($userMeta);
    }

    protected function getUserDao()
    {
        return $this->createDao('AppBundle:User.UserDao');
    }
}