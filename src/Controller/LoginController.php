<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        // con esto si fallo la autenticación lo que haces es automaticamwente dejarle el username que ya introdujo en el campo.
        $lastUsername = $utils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error   
        ]);
    }
}
