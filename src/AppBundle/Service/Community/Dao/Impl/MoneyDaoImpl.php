<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/7
 * Time: 下午9:46
 */

namespace AppBundle\Service\Community\Dao\Impl;


use AppBundle\Service\Common\BaseDao;
use AppBundle\Service\Community\Dao\MoneyDao;

class MoneyDaoImpl extends BaseDao implements MoneyDao
{
    protected $table = 'money';

    public function create($fields)
    {
        $affected = $this->getConnection()->insert(self::TABLENAME, $fields);
        if ($affected <= 0) {
            throw $this->createDaoException('Insert course error.');
        }
        return $this->getMoney($this->lastInsertId());
    }

    public function searchMoneyCount($condition)
    {
        $builder = $this->_createSearchQueryBuilder($condition)
            ->select('COUNT(id)');
        return $builder->execute()->fetchColumn(0);
    }

    public function searchMoney($conditions, $orderBy, $start, $limit)
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
        $this->getConnection()->update(self::TABLENAME, $fields, array('id' => $id));
        return $this->getMoney($id);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $sql = $this->modifyLimitQuery($sql, 1);

        return $this->fetchAssoc($sql, array($id)) ?: null;
    }

    protected function _createSearchQueryBuilder($conditions)
    {
        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'money')
            ->andWhere('community_id = :community_id')
            ->andWhere('type = :type');
        return $builder;
    }

    public function getMoney($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $sql = $this->modifyLimitQuery($sql, 1);
        return $this->fetchAssoc($sql, array($id)) ?: null;
    }

}