<?php
  $HTTP_VERBS = require 'HTTP_VERBS.php';
  $DELIMITERS = require 'DELIMITERS.php';

  $YAR_CONSTANTS = [
    "HTTP_VERBS" => $HTTP_VERBS,
    "DELIMITERS" => $DELIMITERS,
  ];

  define("YAR_CONSTANTS", $YAR_CONSTANTS);
