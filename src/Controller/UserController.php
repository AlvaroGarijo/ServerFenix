<?php

namespace App\Controller;

use App\Service\CalculatorService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Entity\User;

/**
 * @Route("api/v1/user")
 */
class UserController extends AbstractController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/read", name="api.v1.usersRead")
     */
    public function readAction(Request $request): Response
    {
        return $this->json(['user' => $this->userRepository->getUsers()]);
    }
}
