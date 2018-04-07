<?php
  $router = $app->resolve('YarRouter');

  $router->get('/', function ($req) {
    echo "get";
  });

  $router->post('/', function ($req) {
    echo "post";
  });

  $router->put('/', function ($req) {
    echo "put";
  });

  $router->patch('/', function ($req) {
    echo "patch";
  });

  $router->delete('/', function ($req) {
    echo "delete";
  });
