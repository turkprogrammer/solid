<?php

namespace App\O;

class DataBaseSave implements Saver
{

    private $mysqli, $host, $user, $pass, $db;

    public function __construct($host, $user, $pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }

    public function connect()
    {
        $this->mysqli = new \mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }

    public function save($data)
    {
        $this->connect();
        $this->mysqli->query("INSERT INTO `reports` (report) VALUES ('" . $data . "')");
    }
}
