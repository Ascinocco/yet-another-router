<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/Yar/Database/Database.php';
  $host = '127.0.0.1';
  $db = 'YarDb';
  $user = 'anthony';
  $password = 'anthony';
  $charset = 'utf8';
  $port = 8889;

  $databaseConfig = [
    'host' => $host,
    'dbName' => $db,
    'user' => $user,
    'password' => $password,
    'charset' => $charset,
    'port' => $port,
  ];

  return new \YarDatabase\Database($databaseConfig);
