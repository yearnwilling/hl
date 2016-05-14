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
    protected function getNewPageDao()
    {
        return $this->createDao('AppBundle:NewPage.NewPageDao');
    }

}