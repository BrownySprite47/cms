<?php
/**
 * Created by PhpStorm.
 * User: BestUser1
 * Date: 05.04.2018
 * Time: 16:28
 */
require_once __DIR__.'/../vendor/autoload.php';
use Engine\Cms;
use Engine\DI\DI;

try{
    // Dependency injection
    $di = new DI();

    $services = require __DIR__ . '/Config/Service.php';

    // Init services
    foreach ($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();
}catch (\ErrorException $e){
    echo $e->getMessage();
}