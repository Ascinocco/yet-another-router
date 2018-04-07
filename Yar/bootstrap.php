<?php
  $constants = require 'config/constants.php';
  $router = require 'config/router.php';
  $app = require 'config/app.php';
  
  $app->bind('YarRouter', $router);
  $app->bind('YarConstants', $constants);

  return $app;
