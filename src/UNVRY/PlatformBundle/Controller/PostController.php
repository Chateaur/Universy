<?php

namespace UNVRY\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        return $this->render('UNVRYPlatformBundle:Default:index.html.twig');
    }
}
