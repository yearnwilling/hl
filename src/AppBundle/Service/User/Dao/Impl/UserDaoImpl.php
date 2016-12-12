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

    public function getUser($courseId)
    {
        $that = $this;

        $sql = "SELECT * FROM {$that->table} WHERE id = ?";
        $sql = $that->modifyLimitQuery($sql, 1);

        return $that->fetchAssoc($sql, array($courseId)) ?: null;
    }

    public function update($id, $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        return $this->getUser($id);
    }

    public function findUserByNickname($nickname)
    {
        $sql = "SELECT * FROM {$this->table} WHERE username = ?";
        $sql = $this->modifyLimitQuery($sql, 1);

        return $this->fetchAssoc($sql, array($nickname));
    }

    public function create($fields)
    {
        $affected = $this->getConnection()->insert($this->table, $fields);
        if ($affected <= 0) {
            throw $this->createDaoException('Insert course error.');
        }
        return $this->getUser($this->lastInsertId());
    }
}