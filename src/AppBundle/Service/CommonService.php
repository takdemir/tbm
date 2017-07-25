<?php
/**
 * Created by PhpStorm.
 * User: takdemir
 * Date: 25.07.2017
 * Time: 13:08
 */

namespace AppBundle\Service;


use Symfony\Component\HttpFoundation\Session\Session;

class CommonService
{

    /**
     * @var Session
     */
    private $session;

    function __construct(Session $session)
    {
        $this->session = $session;
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