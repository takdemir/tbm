<?php

namespace AppBundle\Controller;

use AppBundle\Form\AdminType;
use AppBundle\Service\CommonService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjaxFirstController extends Controller
{

    public function getcurrentdaydetailsAction(Request $request)
    {
        $commonService=$this->get(CommonService::class);
        if(!$commonService->isAjaxSecure($request)){
            $commonService->setLog("Sisteme izinsiz girme! IP:".$request->getClientIp()." - İçerik: ".$request->getContent(),'AjaxFirstController',19,'accessdenied');
            $response=["hasError"=>true,"responseData"=>[],"message"=>"Access Denied! Please contact with Administrator!"];
        }else{
            $response=["hasError"=>false,"responseData"=>[],"message"=>"Success"];
        }

        return new JsonResponse($response);
    }


}
