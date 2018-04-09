<?php
/**
 * Created by PhpStorm.
 * User: BestUser1
 * Date: 09.04.2018
 * Time: 9:53
 */

namespace Engine;

use Engine\Helper\Common;
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
     * Run cms
     */
    public function run()
    {
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/user/12', 'ProductController:index');

        //echo '<pre>';

        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
        //print_r($this->di);

        //echo Common::getMethod();

        print_r($routerDispatch);
    }
}