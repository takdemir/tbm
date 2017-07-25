<?php
/**
 * Created by PhpStorm.
 * User: takdemir
 * Date: 25.07.2017
 * Time: 13:21
 */

namespace AppBundle\EventListener;


use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

class Exceptionlistener
{

    public function onKernelException(GetResponseForExceptionEvent $event){

        //echo "Hata Bende"; exit;

    }
}