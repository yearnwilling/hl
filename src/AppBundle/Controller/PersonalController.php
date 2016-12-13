<?php
namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\BaseController;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class PersonalController extends BaseController
{
    public function indexAction(Request $request, $type = 'interest')
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getUserService()->updateUserInformation($fields);
        }
        $user = $this->getUserService()->getUserInformation();
        return $this->render("AppBundle:Personal:{$type}.html.twig", array(
            'type' => $type,
            'user' => $user
        ));
    }

    public function passwordAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $pwd = $request->request->all();
            $id = $this->getServiceKernel()->getCurrentUser()->getId();
            $user = $this->getUserService()->getUser($id);
            if ($user['password'] != $this->getPasswordEncoder()->encodePassword($pwd['old'], $user['salt'])) {
                throw new \RuntimeException('原密码不对');
            }

            $this->getUserService()->update($id, array('password' => $pwd['password']));

            return $this->createJsonResponse(true);
        }

        return $this->render("AppBundle:Personal:password.html.twig", array());
    }

    protected function getUserService()
    {
        return $this->getServiceKernel()->createService('AppBundle:User.UserService');
    }

    protected function getPasswordEncoder()
    {
        return new MessageDigestPasswordEncoder('sha256');
    }
}