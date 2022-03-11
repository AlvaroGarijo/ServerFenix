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
 * @Route("api/v1")
 */
class ApiController extends AbstractController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    //     /**
    //      * @Route("/emma/{id}", name="api.v1.test", methods={"GET"})
    //      */
    //     public function getEmma($id){
    //         return $this->json(['hija' => 'Emma', 'id' => $id]);
    //     }

    //     //--------------------------PETICIÓN GET PASANDOLA POR LA URL-------------------------

    //  /**
    //      * @Route("/getSuma/{number1}/{number2}", name="api.v1.calculate", methods={"GET"})
    //      */
    //     public function getSuma($number1, $number2){
    //         return $this->json(['sum' => $number1 + $number2]);
    //     }

    //     //--------------------PETICIÓN POST PASANDOLA POR BODY DE LA PETICIÓN (THUNDER)---------------

    //      /**
    //      * @Route("/getSuma", name="api.v1.calculate.body", methods={"POST"})
    //      */
    //     public function getSumaPost(Request $request){
    //         $number1 = $request->get('number1');
    //         $number2 = $request->get('number2');

    //         return $this->json(['sum' => $number1 + $number2]);
    //     }

    // /**
    //  * @Route("/user/{id}", name="api.v1.user.get", methods={"GET"})
    //  */
    // public function getUserAction($id) {
    //     $user = $this->userRepository->find($id);
    //     $userVersionConsultaMiguel = $this->userRepository->consultaMiguel($id);

    //     return $this->json(['user' => [
    //         'name' => $user->getName(),
    //         'email' => $user->getEmail()
    //     ],'consultaMiguel' => $userVersionConsultaMiguel]);
    // } 

    // /**
    //  * @Route("/user/email/{email}", name="api.v1.user.filter", methods={"GET"})
    //  */
    // public function filterByNameAction($email) {

    //     $user = $this->userRepository->filterByEmail($email);

    //     dump($user);die;
    // } 
}
