<?php
  namespace YarRouter;
  require 'utils.php';

  class Router {
    private $requestData = [];

    public function __construct() {
      $data = getRequestData();
      $this->requestData = $data;
    }

    public function get($route, $handler) {
      $request = $this->requestData;
      return handleRequest($route, "GET", $request, $handler);
    }

    public function post($route, $handler) {
      $request = $this->requestData;
      return handleRequest($route, "POST", $request, $handler);
    }

    public function put($route, $handler) {
      $request = $this->requestData;
      return handleRequest($route, "PUT", $request, $handler);
    }

    public function patch($route, $handler) {
      $request = $this->requestData;
      return handleRequest($route, "PATCH", $request, $handler);
    }

    public function delete($route, $handler) {
      $request = $this->requestData;
      return handleRequest($route, "DELETE", $request, $handler);
    }
  }
