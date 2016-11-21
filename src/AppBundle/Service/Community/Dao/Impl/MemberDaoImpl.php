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

    public function searchMemberCount($condition)
    {
        $builder = $this->_createSearchQueryBuilder($condition)
            ->select('COUNT(id)');
        return $builder->execute()->fetchColumn(0);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table} ";
        return $this->fetchAll($sql) ?: null;
    }

    public function searchMember($conditions, $orderBy, $start, $limit)
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

    protected function _createSearchQueryBuilder($conditions)
    {
        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'member')
            ->andWhere('name LIKE :name');
        return $builder;
    }
}