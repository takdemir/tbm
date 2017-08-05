<?php

namespace AppBundle\Controller;

use AppBundle\Form\AdminType;
use AppBundle\Service\CommonService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $commonService=$this->get(CommonService::class);
        return $this->render("AppBundle::index.html.twig",[]);
    }
}
