<?php
/**
 * Created by PhpStorm.
 * User: takdemir
 * Date: 25.07.2017
 * Time: 13:08
 */

namespace AppBundle\Service;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class CommonService
{

    /**
     * @var Session
     */
    private $session,$em;
    /**
     * @var AuthorizationCheckerInterface
     */
    private $authorizationChecker;

    function __construct(EntityManagerInterface $em, Session $session, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->session = $session;
        $this->em = $em;
        $this->authorizationChecker = $authorizationChecker;
    }


    /**
     * @param string $messageType
     * @param string $message
     * @return bool
     */
    public function setPopUpMessage($messageType='error',$message=""){

        $this->session->getFlashBag()->set($messageType,$message);
        //$this->printR($this->session->getFlashBag()->get('error'));
        return true;

    }


    public function setLog($logMessage,$filenameForLog,$lineNumberOfLogFile=0,$logType='warning',$logTable="customlog"){

        return true;
    }


    /**
     * @param Request $request
     * @return bool
     */
    public function isAjaxSecure(Request $request){

        if(!$request->isXmlHttpRequest() || !$this->authorizationChecker->isGranted('ROLE_MUSTERI')){
            return false;
        }
        return true;
    }


    /**
     * @param $arr
     * @param string $type
     * @desc Print the screen and exit
     */

    public function printR($arr,$type='p'){
        echo '<pre>';
        if($type=='u'){
            var_dump($arr);
        }else {
            print_r($arr);
        }
        exit;
    }

}