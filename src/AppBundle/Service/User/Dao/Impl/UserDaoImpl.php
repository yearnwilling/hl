<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/11
 * Time: 下午5:40
 */

namespace AppBundle\Service\User\Dao\Impl;


use AppBundle\Service\Common\BaseDao;
use AppBundle\Service\User\Dao\UserDao;

class UserDaoImpl extends BaseDao implements UserDao
{

    protected $table = 'user';

    public function findUserByNickname($nickname)
    {
        $sql = "SELECT * FROM {$this->table} WHERE username = ?";
        $sql = $this->modifyLimitQuery($sql, 1);

        return $this->fetchAssoc($sql, array($nickname));
    }
}