<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProfileControllerApi extends AbstractController
{
    #[Route('/api/profile', name: 'app_api_user_profile')]
    public function __invoke(): JsonResponse
    {
        $user = $this->getUser();
        return new JsonResponse([
            "email" => $user->getUserIdentifier()
        ]);
    }
}