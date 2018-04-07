<?php
  // order matters here, the app instance needs to be available for the router
  $app = require 'config/app.php';
  
  $constants = require 'config/constants.php';
  
  $app->bind('YarConstants', $constants);
  
  $router = require 'config/router.php';
  
  $app->bind('YarRouter', $router);

  return $app;
