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
    private function getStandings() :array
    {
        $query = "SELECT name, points ,goals_scored, goals_canceed, match_played, wins, losses, draws 
                  FROM teams 
                  ORDER BY points DESC,
                           goals_scored - goals_canceed DESC,
                           goals_scored DESC;";
        
        $result = $this->conn->query($query, PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }
 }