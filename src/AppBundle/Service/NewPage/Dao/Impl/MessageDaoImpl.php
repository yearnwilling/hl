<?php
namespace AppBundle\Service\NewPage\Dao\Impl;

use AppBundle\Service\NewPage\Dao\MessageDao;
use AppBundle\Service\Common\BaseDao;

class MessageDaoImpl extends BaseDao implements MessageDao
{

    protected $table = 'message';

    public function getMessage()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->fetchAll($sql) ?: null;
    }

    public function addMessage($message)
    {
        $affected  = $this->getConnection()->insert($this->table, $message);
        return $affected;
    }

    public function deleteMessage($id)
    {
        return $this->getConnection()->delete($this->table,array('id'=>$id));
    }
}