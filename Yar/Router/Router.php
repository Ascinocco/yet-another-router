<?php
  namespace YarRouter;
  require 'utils.php';

  class Router {
    private $requestData = [];
    private $app = null;

    public function __construct($app) {
      $this->app = $app;
      $data = getRequestData();
      $this->requestData = $data;
    }

    public function get($route, $handler) {
      $request = $this->requestData;
      $httpVerb = $this->app->resolve('YarConstants')->get('HTTP_VERBS.GET');
      return handleRequest($route, $httpVerb, $request, $handler);
    }

    public function post($route, $handler) {
      $request = $this->requestData;
      $httpVerb = $this->app->resolve('YarConstants')->get('HTTP_VERBS.POST');
      return handleRequest($route, "POST", $request, $handler);
    }

    public function put($route, $handler) {
      $request = $this->requestData;
      $httpVerb = $this->app->resolve('YarConstants')->get('HTTP_VERBS.PUT');
      return handleRequest($route, $httpVerb, $request, $handler);
    }

    public function patch($route, $handler) {
      $request = $this->requestData;
      $httpVerb = $this->app->resolve('YarConstants')->get('HTTP_VERBS.PATCH');
      return handleRequest($route, $httpVerb, $request, $handler);
    }

    public function delete($route, $handler) {
      $request = $this->requestData;
      $httpVerb = $this->app->resolve('YarConstants')->get('HTTP_VERBS.DELETE');
      return handleRequest($route, $httpVerb, $request, $handler);
    }
  }
