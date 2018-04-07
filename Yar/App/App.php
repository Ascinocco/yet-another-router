<?php
  namespace YarApp;

  class App {
    private $services = [];

    public function bind($key, $service) {
      $currentServices = $this->services;
      $currentServices[$key] = $service;
      $this->services = $currentServices;
    }

    public function resolve($key) {
      return $this->services[$key];
    }

    public function resolveAll() {
      return $this->services;
    }
  }
