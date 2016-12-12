<?php

namespace AppBundle\Command;

use AppBundle\Security\CurrentUser;
use AppBundle\Service\Common\ServiceKernel;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class AppInitCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:init')
            ->setDescription('Init application.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->initServiceKernel();

        $output->writeln("Init Application.");
        $user = array(
            'username' => 'admin',
            'password' => 'kaifazhe',
            'roles' => 'ROLE_SUPER_ADMIN',
        );

        ServiceKernel::instance()->createService('AppBundle:User.UserService')->register($user);

        $output->writeln([
            "Admin Username: {$user['nickname']}",
            "Admin Password: {$user['password']}"
        ]);
    }

    private function initServiceKernel()
    {
        $serviceKernel = ServiceKernel::create('dev', false);
        $serviceKernel->setParameterBag($this->getContainer()->getParameterBag());
        $serviceKernel->setConnection($this->getContainer()->get('database_connection'));
        $currentUser = new CurrentUser(array(
            'id' => 1,
            'nickname' => '游客',
            'currentIp' =>  '127.0.0.1',
            'roles' => array(),
        ));
        $serviceKernel->setCurrentUser($currentUser);

    }
}