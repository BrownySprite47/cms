<?php
/**
 * Created by PhpStorm.
 * User: BestUser1
 * Date: 09.04.2018
 * Time: 12:39
 */

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';
    /**
     * @return mixed
     */
    public function init()
    {
        $router = new Router('http://cms.loc/');

        $this->di->set($this->serviceName, $router);
    }
}