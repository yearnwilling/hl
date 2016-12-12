<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/12
 * Time: 下午10:44
 */

namespace AppBundle\Controller;


use AppBundle\Service\Common\Paginator;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends BaseController
{
    public function indexAction(Request $request)
    {
        $condition = array();

        $paginator = new Paginator(
            $request,
            $this->getUserService()->searchUserCount($condition),
            5
        );

        $user = $this->getUserService()->searchUser(
            $condition,
            array('created_time', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AppBundle:Admin:index.html.twig', array(
            'users' => $user
        ));
    }

    public function addAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $user = $request->request->all();
            $user['roles'] = 'ROLE_ADMIN';
            $this->getUserService()->register($user);
            return $this->createJsonResponse(true);
        }
        return $this->render('AppBundle:Admin:show.html.twig', array(
            'type' => 'add'
        ));
    }


    public function editAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $user = $request->request->all();
            $user['roles'] = 'ROLE_ADMIN';
            $this->getUserService()->update($id, $user);
            return $this->createJsonResponse(true);
        }
        $user = $this->getUserService()->getUser($id);
        return $this->render('AppBundle:Admin:show.html.twig', array(
            'type' => 'edit',
            'user' => $user
        ));
    }

    public function deleteAction($id)
    {
         $this->getUserService()->deleteUser($id);
        return $this->createJsonResponse(true);
    }

    protected function getUserService()
    {
        return $this->getServiceKernel()->createService('AppBundle:User.UserService');
    }
}