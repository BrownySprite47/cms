<?php
/**
 * Created by PhpStorm.
 * User: BestUser1
 * Date: 05.04.2018
 * Time: 16:38
 */

namespace Engine\DI;


class DI
{
    /**
     * @var array
     */
    private $container = [];

    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->container[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->has($key);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function has($key)
    {
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }
}