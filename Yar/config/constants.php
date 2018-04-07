<?php
  require $_SERVER['DOCUMENT_ROOT'] . '/Yar/Constants/Constants.php';
  $HTTP_VERBS = require  $_SERVER['DOCUMENT_ROOT'] . '/Yar/Constants/HTTP_VERBS.php';
  $DELIMITERS = require  $_SERVER['DOCUMENT_ROOT'] . '/Yar/Constants/DELIMITERS.php';

  $YAR_CONSTANTS = [
    "HTTP_VERBS" => $HTTP_VERBS,
    "DELIMITERS" => $DELIMITERS,
  ];

  return new \YarConstants\Constants($YAR_CONSTANTS);

