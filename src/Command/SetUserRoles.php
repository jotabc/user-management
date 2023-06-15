<?php

namespace App\Command;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('app:user:set-roles')]
class SetUserRoles extends Command
{

    public function __construct(
        private UserRepository $userRepo,
        private EntityManagerInterface $em
    )
    {
        parent::__construct();    
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $user = $this->userRepo->findOneBy(['email' => 'jonnabcl56@gmail.com']);
        $user->setRoles(['ROLE_SUPER_ADMIN']);

        $this->em->persist($user);
        $this->em->flush();

        return Command::SUCCESS;
    }
}