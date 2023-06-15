<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route(path: '/admin', name: 'app_admin', methods: ['GET'])]
    public function __invoke(): Response
    {
        $html = '<html><body><h1>Page of Admin Role User</h1></body></html>';
        return new Response($html);
    }
}