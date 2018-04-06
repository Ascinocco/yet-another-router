<?php
  namespace App;
  require './Yar/Yar.php';

  $router = new \Yar\Router();

  $router->get('/yar/', function ($req) {
    var_dump($req);
  });

  // $route->post('/yar/', function () {
  //   echo "potato bisque";
  // });

  // $router->test();
