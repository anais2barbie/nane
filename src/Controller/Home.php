<?php 

namespace App\Controller;
use Nane\AbstractController;

class Home extends AbstractController
{
    public function print() {
       return $this->render('index');
    }
}