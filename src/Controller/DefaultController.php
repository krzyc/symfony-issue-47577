<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        (null)->getX();
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
         return $this->render('login.html.twig');
    }

    /**
     * @Route("/login-check", name="login_check")
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }
}
