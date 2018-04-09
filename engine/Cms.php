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

    public $db;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run()
    {
        echo '<pre>';
        print_r($this->di);
    }
}