<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController
{
    #[Route('/profile', name: 'app_user_profile')]
    public function __invoke(): Response
    {
        $html = '<h1>Profile</h1>'   ;
        return new Response(
            '<html><body>'.$html.'</body></html>'
        );
    }
}
