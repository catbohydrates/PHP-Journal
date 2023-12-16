<?php

Class Dbh{
    private $host = "localhost";
    private $username = "root";
    private $pwd = "";
    private $dbname = "journal";

    protected function connect(){
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}