<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/11
 * Time: 下午2:53
 */

namespace AppBundle\Service\Community\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Community\PictureService;

class PictureServiceImpl extends BaseService implements PictureService
{
    public function addPicture($picture)
    {
        $picture['created_time'] = time();
        return $this->getPictureDao()->create($picture);
    }

    public function searchPicture(array $conditions, array $orderBy, $start, $limit)
    {
        return $this->getPictureDao()->searchPicture($conditions, $orderBy, $start, $limit);
    }

    public function searchPictureCount($condition)
    {
        return $this->getPictureDao()->searchPictureCount($condition);
    }

    public function getPicture($id)
    {
        return $this->getPictureDao()->getPicture($id);
    }

    protected function getPictureDao()
    {
        return $this->createDao('AppBundle:Community.PictureDao');
    }
}