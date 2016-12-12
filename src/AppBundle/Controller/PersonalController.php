<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    protected function getUserService()
    {
        return $this->getServiceKernel()->createService('AppBundle:User.UserService');
    }
}