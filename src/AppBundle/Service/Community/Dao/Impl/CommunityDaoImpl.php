<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/5
 * Time: 下午11:26
 */

namespace AppBundle\Service\Community\Dao\Impl;


use AppBundle\Service\Common\BaseDao;
use AppBundle\Service\Community\Dao\CommunityDao;

class CommunityDaoImpl extends BaseDao implements CommunityDao
{
    protected $table = 'community';

    public function searchCommunityCount($condition)
    {
        $builder = $this->_createSearchQueryBuilder($condition)
            ->select('COUNT(id)');
        return $builder->execute()->fetchColumn(0);
    }

    public function searchCommunity($conditions, $orderBy, $start, $limit)
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

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $sql = $this->modifyLimitQuery($sql, 1);

        return $this->fetchAssoc($sql, array($id)) ?: null;
    }

    protected function _createSearchQueryBuilder($conditions)
    {
        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'community')
            ->andWhere('category = :category');
        return $builder;
    }
}