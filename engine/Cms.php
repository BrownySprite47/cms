<?php
/**
 * Created by PhpStorm.
 * User: BestUser1
 * Date: 09.04.2018
 * Time: 9:53
 */

namespace Engine;


class Cms
{
    /**
     * @var DI
     */
    private $di;

    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Run Cms
     */
    public function run()
    {
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/{$id}', 'ProductController:index');
        $this->router->add('cart', '/cart/', 'CartController:index');

        echo '<pre>';
        print_r($this->di);
    }
}