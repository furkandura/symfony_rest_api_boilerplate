<?php

namespace App\Controller\Api;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/auth", name="api.auth.")
 */
class AuthController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("/login", name="login")
     */
    public function login(): View
    {
        return View::create();
    }
}
