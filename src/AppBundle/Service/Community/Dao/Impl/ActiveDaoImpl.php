<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/7
 * Time: 上午12:13
 */

namespace AppBundle\Service\Community\Dao\Impl;


use AppBundle\Service\Common\BaseDao;
use AppBundle\Service\Community\Dao\ActiveDao;

class ActiveDaoImpl extends BaseDao implements ActiveDao
{
    protected $table = 'community_active';

    public function create($fields)
    {
        $affected = $this->getConnection()->insert(self::TABLENAME, $fields);
        if ($affected <= 0) {
            throw $this->createDaoException('Insert course error.');
        }
        return $this->getActive($this->lastInsertId());
    }

    public function getActive($courseId)
    {
        $that = $this;

        $sql = "SELECT * FROM {$that->table} WHERE id = ?";
        $sql = $that->modifyLimitQuery($sql, 1);

        return $that->fetchAssoc($sql, array($courseId)) ?: null;
    }
}