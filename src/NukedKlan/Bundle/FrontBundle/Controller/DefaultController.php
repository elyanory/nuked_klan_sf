<?php

namespace NukedKlan\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 *
 * @package NukedKlan\Bundle\FrontBundle\Controller
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NukedKlanAppBundle:default:index.html.twig');
    }
}
