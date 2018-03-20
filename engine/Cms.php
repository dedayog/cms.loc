<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 19.03.2018
 * Time: 20:45
 */

namespace Engine;

use Engine\Helper\Common;
use Engine\DI\DI;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    public $router;

    /**
     * cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
            $this->di = $di;
            $this->router = $this->di->get('router');
    }

    /**
     *  Run Smc
     */
    public function run()
    {
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/user/id12', 'ProductController:index');

        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

        print_r(Common::getMethod() . " " . Common::getPathUrl());

        //print_r($this->di);

        print_r($routerDispatch);


    }
}