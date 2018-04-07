<?php
  namespace App;
  require './Yar/Yar.php';

  $router = new \Yar\Router();

  $router->get('/yar/', function ($req) {
    var_dump($req);
  });

  $router->post('/yar/', function ($req) {
    var_dump($req);
  });

  // $router->test();
