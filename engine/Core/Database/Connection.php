<?php
/**
 * Created by PhpStorm.
 * User: BestUser1
 * Date: 09.04.2018
 * Time: 10:42
 */

namespace Engine\Core\Database;

use \PDO;

class Connection
{
    /**
     * @var
     */
    private $link;
    /*
     *
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * @return $this
     */
    private function connect()
    {
        $config = [
            'host'     => 'localhost',
            'db_name'  => 'cms',
            'username' => 'mysql',
            'password' => 'mysql',
            'charset'  => 'utf8'
        ];

        $dsn = 'mysql:host='.$config['host'].';db_name='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql)
    {
        $exe = $this->execute($sql);
        $result = $exe->fetchAll(\PDO::FETCH_ASSOC);

        if ($result == false){
            return [];
        }

        return $result;
    }
}