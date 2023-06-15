<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperAdminController extends AbstractController
{
    #[Route(path: '/super_admin', name: 'app_super_admin', methods: ['GET'])]
    public function __invoke(): Response
    {
        $html = '<html><body><h1>Page of Super Admin Role User</h1></body></html>';
        return new Response($html);
    }
}
