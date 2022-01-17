<?php

namespace Yanntyb\Projet\Controller;

use Yanntyb\Controller\Model\Classes\Controller;

class HomeController extends Controller
{
    public function home(){
        echo "ok";
    }

    public function message($message){
        echo $message;
    }
}