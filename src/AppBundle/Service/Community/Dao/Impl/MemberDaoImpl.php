<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/20
 * Time: 下午3:13
 */

namespace AppBundle\Service\Community\Dao\Impl;


use AppBundle\Service\Common\BaseDao;
use AppBundle\Service\Community\Dao\MemberDao;

class MemberDaoImpl extends BaseDao implements MemberDao
{
    protected $table = 'member';

    public function create($fields)
    {
        $affected = $this->getConnection()->insert(self::TABLENAME, $fields);
        if ($affected <= 0) {
            throw $this->createDaoException('Insert course error.');
        }
        return $this->getMember($this->lastInsertId());
    }

    public function update($id, $fields)
    {
        $this->getConnection()->update(self::TABLENAME, $fields, array('id' => $id));
        return $this->getMember($id);
    }

    public function getMember($courseId)
    {
        $that = $this;

        $sql = "SELECT * FROM {$that->table} WHERE id = ?";
        $sql = $that->modifyLimitQuery($sql, 1);

        return $that->fetchAssoc($sql, array($courseId)) ?: null;
    }

    public function delete($id)
    {
        $result = $this->getConnection()->delete(self::TABLENAME, array('id' => $id));
        return $result;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table} ";
        return $this->fetchAll($sql) ?: null;
    }
}