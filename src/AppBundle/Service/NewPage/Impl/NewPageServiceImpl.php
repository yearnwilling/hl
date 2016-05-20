<?php
namespace AppBundle\Service\NewPage\Impl;

use AppBundle\Service\Common\BaseService;
use AppBundle\Service\NewPage\NewPageService;

class NewPageServiceImpl extends BaseService implements  NewPageService
{
    public function test()
    {
        return $this->getNewPageDao()->test();
    }

    public function getArtical()
    {
        return $this->getNewPageDao()->getIndexArtical();
    }

    public function addMessage($message)
    {
        $this->getMessageDao()->addMessage($message);
    }

    public function getMessage()
    {
        return $this->getMessageDao()->getMessage();
    }

    public function deleteMessage($id)
    {
        return $this->getMessageDao()->deleteMessage($id);
    }

    protected function getNewPageDao()
    {
        return $this->createDao('AppBundle:NewPage.NewPageDao');
    }

    protected function getMessageDao()
    {
        return $this->createDao('AppBundle:NewPage.MessageDao');
    }

}