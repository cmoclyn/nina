<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

  /**
   * @param AuthenticationUtils $helper
   * @return Response
   *
   * @Route("/login", name="security_login")
   */
    public function login(AuthenticationUtils $helper):Response
    {
        return $this->render('security/login.html.twig', [
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout():void
    {
        throw new \Exception('This should never be reached!');
    }
}
