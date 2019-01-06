<?php
require 'parameters.php';


class MysqlConnector
{
    private $pdo;
    private $query;
    private $results;

    public function __construct()
    {
        global $host, $user, $pass;

        try {
            $this->pdo = new PDO("mysql:host=$host; dbname=naliczenia", $user, $pass);
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function selectQuery($query)
    {
        $this->query = $this->pdo->prepare($query);
        $this->query->execute();
        $this->results = $this->query->fetchAll();

        return $this->results;
    }

}

#$x = $pdo->prepare('SELECT * FROM users');
#$x -> execute();
#$y = $x -> fetch();
#var_dump($y);