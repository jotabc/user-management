<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $userHashPassword)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('jonnabcl56@gmail.com');
        $hashedPassword = $this->userHashPassword->hashPassword($user, '12345');
        $user->setPassword($hashedPassword);

        $manager->persist($user);
        $manager->flush();
    }
}
