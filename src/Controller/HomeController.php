<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route(path: '/', name: 'app_home', methods: ['GET'])]
    public function __invoke(): Response
    {
        $html = '<html><body><h1>User Management</h1></body></html>';
        return new Response($html);
    }
}