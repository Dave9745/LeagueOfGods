<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    use ContainerAwareTrait;
    //Load fixture data user
    public function load(ObjectManager $manager)
    {

        $usersData = array(
            array(
                'username'  => 'superman',
                'email'     => 'superman@log.com',
                'password'  => 'sup',
                'roles'     => array('ROLE_ADMIN'),
            ),
            array(
                'username'  => 'batman',
                'email'     => 'batman@log.com',
                'password'  => 'bat',
                'roles'     => array('ROLE_ADMIN'),
            ),
            array(
                'username'  => 'spiderman',
                'email'     => 'spiderman@log.com',
                'password'  => 'spi',
//                'roles'     => array(),
                'roles'     => array('ROLE_USER'),
            ),
            array(
                'username'  => 'wonder woman',
                'email'     => 'wonderwoman@log.com',
                'password'  => 'won',
                'roles'     => array(),
            ),

        );
        // Accessing the user manager service
        $userManager = $this->container->get('fos_user.user_manager');
        foreach ($usersData as $i => $userData)
        {
            $user = $userManager->createUser();
            $user->setUsername($userData['username']);
            $user->setEmail($userData['email']);
            $user->setPlainPassword($userData['password']);
            $user->setEnabled(true);
            $user->setRoles($userData['roles']);
            $manager->persist($user);
            $this->addReference(sprintf('user-%s', $i), $user);
        }
        $manager->flush();
    }
    public function getOrder()
    {
        return 10;
    }
}