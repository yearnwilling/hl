<?php
namespace AppBundle\Security;

use AppBundle\Service\Common\ServiceKernel;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class UserProvider extends EntityRepository implements UserProviderInterface
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function loadUserByUsername($username)
    {
        $user = $this->getUserService()->getUserByUsername($username);
//        $user['password'] = $this->getPasswordEncoder()->encodePassword('123456', '123456');
        $user['roles'] = array($user['roles']);
//            $user = array(
//                'username' => '123',
//                'password' => $this->getPasswordEncoder()->encodePassword('123', '123'),
//                'salt' => '123',
//                'roles' => array('ADMIN')
//            );
//        var_dump($user);
//        exit();
        if (empty($user)) {
            throw new UsernameNotFoundException(
                sprintf('Username "%s" does not exist.', $username)
            );
        }

        $currentUser = new CurrentUser($user);

        ServiceKernel::instance()->setCurrentUser($currentUser);

        return $currentUser;
    }

    protected function getPasswordEncoder()
    {
        return new MessageDigestPasswordEncoder('sha256');
    }


    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof CurrentUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'AppBundle\Security\CurrentUser';
    }

    protected function getUserService()
    {
        return ServiceKernel::instance()->createService('AppBundle:User.UserService');
    }
}
