<?php

namespace Afra\App\Models;
class BaseModel
{
    private static $instance;
    protected $connection;

    public function __construct()
    {
        $this->connection = new \mysqli("localhost", "root", "", "raw_data");
        if ($this->connection->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->connection->connect_error;
            exit();
        }
        echo 'Db connected';
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }


}

//echo "Connected successfully";
