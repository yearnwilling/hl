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

    public function getMoney($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $sql = $this->modifyLimitQuery($sql, 1);
        return $this->fetchAssoc($sql, array($id)) ?: null;
    }

}