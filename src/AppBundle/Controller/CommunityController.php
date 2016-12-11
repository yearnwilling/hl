<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/11/6
 * Time: 下午6:24
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Common\Paginator;

class CommunityController extends BaseController
{
    public function indexAction(Request $request, $category = 'video')
    {
        $condition['category'] = $category;

        $paginator = new Paginator(
            $request,
            $this->getCommunityService()->searchCommunityCount($condition),
            5
        );

        $community = $this->getCommunityService()->searchCommunity(
            $condition,
            array('create_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:index.html.twig', array(
            'communitys' => $community,
            'paginator' => $paginator,
            'category' => $category
        ));
    }

    public function memberAction(Request $request, $communityId)
    {
        $condition = array();
        $condition['community_id'] = $communityId;
        $name = $request->query->get('keyword');
        if (!empty($name)) {
            $condition['name'] = '%'.$name.'%';
        }
        $paginator = new Paginator(
            $request,
            $this->getMemberService()->searchMemberCount($condition),
            5
        );

        $member = $this->getMemberService()->searchMember(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:member.html.twig', array(
            'members' => $member,
            'paginator' => $paginator,
            'communityId' => $communityId
        ));
    }

    public function memberAddAction(Request $request, $communityId)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $fields['community_id'] = $communityId;
            $this->getMemberService()->addMember($fields);
            return $this->createJsonResponse(true);
        }
        return $this->render('AppBundle:Community:member-show.html.twig', array(
            'type' => 'add',
            'communityId' => $communityId
        ));
    }

    public function memberEditAction(Request $request, $communityId, $id)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getMemberService()->updateMember($id,$fields);
            return $this->createJsonResponse(true);
        }
        $member = $this->getMemberService()->getMemberById($id);
        return $this->render('AppBundle:Community:member-show.html.twig', array(
            'member' => $member,
            'type' => 'edit',
            'communityId' => $communityId
        ));
    }

    public function memberDeleteAction(Request $request, $id)
    {
        $this->getMemberService()->deleteMember($id);
        return $this->createJsonResponse(true);
    }

    public function activityAction(Request $request, $communityId)
    {
        $condition = array();

        $name = $request->query->get('keyword');
        if (!empty($name)) {
            $condition['name'] = '%'.$name.'%';
        }

        $paginator = new Paginator(
            $request,
            $this->getCommunityActiveService()->searchActiveCount($condition),
            5
        );

        $active = $this->getCommunityActiveService()->searchActive(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:activity.html.twig', array(
            'communityId' => $communityId,
            'actives' => $active,
            'paginator' => $paginator
        ));
    }

    public function activityAddAction(Request $request, $communityId)
    {
        if ($request->getMethod() == 'POST') {
            $active =$request->request->all();
            $active['community_id'] = $communityId;
            $this->getCommunityActiveService()->addActive($active);
            return $this->createJsonResponse(true);
        }
        return $this->render('AppBundle:Community:activity-show.html.twig', array(
            'communityId' => $communityId
        ));
    }

    public function moneyAction(Request $request, $communityId, $type = 'in')
    {
        $condition = array();
        $condition['type'] = $type;
        $condition['communit_id'] = $communityId;

        $paginator = new Paginator(
            $request,
            $this->getMoneyService()->searchMoneyCount($condition),
            5
        );

        $money = $this->getMoneyService()->searchMoney(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:money.html.twig', array(
            'type' => $type,
            'communityId' => $communityId,
            'moneys' => $money,
            'paginator' => $paginator
        ));
    }

    public function moneyAddAction(Request $request, $communityId, $type = 'in')
    {
        if ($request->getMethod() == 'POST') {
            $money =$request->request->all();
            $money['community_id'] = $communityId;
            $money['type'] = $type;
            $this->getMoneyService()->addMoney($money);
            return $this->createJsonResponse(true);
        }

        return $this->render('AppBundle:Community:money-show.html.twig', array(
            'communityId' => $communityId,
            'type' => $type,
            'submitType' => 'add'
        ));
    }

    public function moneyEditAction(Request $request, $communityId, $type = 'in', $id)
    {
        if ($request->getMethod() == 'POST') {
            $money =$request->request->all();
            $this->getMoneyService()->updateMoney($id, $money);
            return $this->createJsonResponse(true);
        }

        $money = $this->getMoneyService()->getMoney($id);
        return $this->render('AppBundle:Community:money-show.html.twig', array(
            'communityId' => $communityId,
            'type' => $type,
            'submitType' => 'edit',
            'id' => $id,
            'money' => $money
        ));
    }

    public function moneyDeleteAction(Request $request, $id)
    {
        $this->getMoneyService()->deleteMoney($id);
        return $this->createJsonResponse(true);
    }

    public function pictureAction(Request $request, $communityId)
    {
        $condition = array();
        $condition['community_id'] = $communityId;

        $paginator = new Paginator(
            $request,
            $this->getPictureService()->searchPictureCount($condition),
            6
        );

        $picture = $this->getPictureService()->searchPicture(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Community:picture.html.twig', array(
            'communityId' => $communityId,
            'pictures' => $picture,
            'paginator' => $paginator
        ));
    }

    public function pictureAddAction(Request $request, $communityId)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $file = $request->files->get('file');
            $fields['picture_uri'] = $this->getUploadFileService()->uploadFile($file);
            $fields['community_id'] = $communityId;
            $this->getPictureService()->addPicture($fields);
            return $this->createJsonResponse(true);
        }
        return $this->createJsonResponse(false);
    }

    public function pictureDisplayAction(Request $request, $pictureId)
    {
        $picture = $this->getPictureService()->getPicture($pictureId);
        if (empty($picture)) {
            throw new \RuntimeException('作物不存在');
        }

        $parsed = $this->getUploadFileService()->parseFileUri($picture['picture_uri']);

        return $this->forward('AppBundle:UploadFile:downloadLocalFile', [
            'filepath' => $parsed['fullpath']
        ]);
    }

    protected function getCommunityActiveService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.ActiveService');
    }

    protected function getPictureService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.PictureService');
    }

    protected function getMemberService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.MemberService');
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('AppBundle:UploadFile.UploadFileService');
    }

    protected function getMoneyService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.MoneyService');
    }

    protected function getCommunityService()
    {
        return $this->getServiceKernel()->createService('AppBundle:Community.CommunityService');
    }
}