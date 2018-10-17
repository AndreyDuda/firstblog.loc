<?php

namespace Duda\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DudaBlogBundle:Default:index.html.twig');
    }
}
