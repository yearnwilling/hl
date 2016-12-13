<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/13
 * Time: 下午7:15
 */

namespace AppBundle\Service\Memo\Dao\Impl;


use AppBundle\Service\Common\BaseDao;
use AppBundle\Service\Community\Dao\MemberDao;

class MemoDaoImpl extends BaseDao implements MemberDao
{
    protected $table = 'memo';

    public function create($fields)
    {
        $affected = $this->getConnection()->insert($this->table, $fields);
        if ($affected <= 0) {
            throw $this->createDaoException('Insert course error.');
        }
        return $this->getMemo($this->lastInsertId());
    }

    public function getMemo($courseId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $sql = $this->modifyLimitQuery($sql, 1);

        return $this->fetchAssoc($sql, array($courseId)) ?: null;
    }

    public function searchMemoCount($condition)
    {
        $builder = $this->_createSearchQueryBuilder($condition)
            ->select('COUNT(id)');
        return $builder->execute()->fetchColumn(0);
    }

    public function searchMemo($conditions, $orderBy, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('*')
            ->orderBy($orderBy[0], $orderBy[1])
            ->setFirstResult($start)
            ->setMaxResults($limit);

        if (empty($orderBy)) {
            $builder->addOrderBy('create_time', 'DESC');
        }

        return $this->builderFetchAll($builder) ?: array();
    }

    public function update($id, $fields)
    {
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        return $this->getMemo($id);
    }

    public function delete($id)
    {
        $result = $this->getConnection()->delete($this->table, array('id' => $id));
        return $result;
    }

    protected function _createSearchQueryBuilder($conditions)
    {
        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'memo');
        return $builder;
    }
}