<?php
  namespace YarConstants;

  class Constants {
    private $CONSTANTS = null;

    public function __construct($constants) {
      $this->CONSTANTS = $constants;
    }

    public function get($keysToParse, $remainingConstants = []) {
      $keys = $keysToParse;
      
      if (gettype($keys) === "string") {
        $keys = explode(".", $keys);
      }

      $keys = array_values($keys);

      $constants = empty($remainingConstants) ? $this->CONSTANTS : $remainingConstants;
      $value = $constants[$keys[0]];
      unset($keys[0]);

      return empty($keys) ? $value : self::get($keys, $value);
    }
  }
