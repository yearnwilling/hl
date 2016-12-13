<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/13
 * Time: 下午7:12
 */

namespace AppBundle\Service\Memo\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Memo\MemoService;

class MemoServiceImpl extends BaseService implements MemoService
{
    public function addMemo($memo)
    {
        $memo['created_time'] = time();
        return $this->getMemoDao()->create($memo);
    }

    public function searchMemoCount($condition)
    {
        return $this->getMemoDao()->searchMemoCount($condition);
    }

    public function searchMemo(array $conditions, array $orderBy, $start, $limit)
    {
        return $this->getMemoDao()->searchMemo($conditions, $orderBy, $start, $limit);
    }

    public function getMemo($id)
    {
        return $this->getMemoDao()->getMemo($id);
    }

    public function updateMemo($id, $memo)
    {
        $memo['created_time'] = time();
        return $this->getMemoDao()->update($id, $memo);
    }

    public function deleteMemo($id)
    {
        return $this->getMemoDao()->delete($id);
    }

    protected function getMemoDao()
    {
        return $this->createDao('AppBundle:Memo.MemoDao');
    }
}