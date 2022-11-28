<?php
 declare(strict_types=1);

 class Model
 {
    public PDO $conn;


    public function __construct(array $config)
    {
        if($this->validateConfig($config))
        {
            $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
            $this->conn = new PDO($dsn, $config['user'], $config['password']);
        }
        else
        {
            echo "Config went wrong";
        }
    }
    private function validateConfig(array $config) :bool
    {
        if( !empty($config['host']) && 
            !empty($config['database']) &&
            !empty($config['user']) &&
            !empty($config['password']) 
        ) {
            return true;
        } else {
            return false;
        }
    }
 }