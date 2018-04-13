<?php
  namespace YarDatabase;

  use PDO;
  class Database {
    private $host = null;
    private $dbName = null;
    private $dbUserName = null;
    private $dbUserPassword = null;
    private $dbCharset = null;
    private $dsn = null;
    private $opt = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    private $pdo = null;

    public function __construct($dbConfig) {
      $this->pdo = $this->createConnection($dbConfig);
    }

    public function __destruct() {
      $this->closeConnection();
    }

    private function createConnection($dbConfig) {
      $host = $dbConfig['host'];
      $dbName = $dbConfig['dbName'];
      $charset = $dbConfig['charset'];
      $configOpts = $this->opt;
      $port = $dbConfig['port'];

      $user = $dbConfig['user'];
      $password = $dbConfig['password'];

      $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=$charset";

      try {
        $pdo = new PDO($dsn, $user, $password, $configOpts);
        return $pdo;
      } catch(PDOException $e) {
        print "Error: " . $e->getMessage() . "<br />";
        $pdo = null;
        die();
      }
    }

    public function closeConnection() {
      $this->pdo = null;
    }
  }
