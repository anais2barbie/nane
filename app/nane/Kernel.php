<?php

namespace Nane;


class Kernel {

    private $router;
    

    public function __construct() {

        return $this->router = new Router();
        
    }

    public function run() {

        $dispatcher = $this->router->setRoutes();
        $this->router->runRoute($dispatcher);

    }   
}