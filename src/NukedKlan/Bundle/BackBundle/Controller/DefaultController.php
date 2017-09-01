<?php

namespace NukedKlan\Bundle\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 *
 * @package NukedKlan\Bundle\BackBundle\Controller
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NukedKlanBackBundle:default:index.html.twig');
    }
}
