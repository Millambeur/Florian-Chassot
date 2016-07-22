<?php

namespace Altgeek\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CVController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekCVBundle::index.html.twig');
    }
}
