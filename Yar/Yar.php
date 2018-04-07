<?php

namespace Yar;

class Router {
  private static $GET = "GET";
  private static $POST = "POST";
  private static $QUERY_DELMITER = "?";

  public static function test() {
    $test = self::retrieveRequestData();
    var_dump($test);
    echo "yay";
  }

  private static function retrieveRequestData() {
    return [
      'method' => $_SERVER['REQUEST_METHOD'],
      'queryString' => $_SERVER['QUERY_STRING'],
      'requestUri' => $_SERVER['REQUEST_URI'],
      'contentType' => $_SERVER['CONTENT_TYPE'],
    ];
  }

  private static function retrieveFormData() {
    return $_POST;
  }

  private static function getUri($reqData) {
    $uri = $reqData['requestUri'];

    if (strpos($uri, self::$QUERY_DELMITER) === false) {
      return $uri;
    }

    $uriWithoutQueryString = substr(
      $uri, 0, strpos($uri, self::$QUERY_DELMITER)
    );

    return $uriWithoutQueryString;
  }

  public static function get($route, $handler) {
    $requestData = self::retrieveRequestData();
    $isGetMethod = strcmp($requestData['method'], self::$GET) === 0;

    if (!$isGetMethod) {
      return false;
    }

    $uri = self::getUri($requestData);
    $doesRouteMatchUri = strcmp($route, $uri) === 0;
    
    if(!$doesRouteMatchUri) {
      return false;
    }

    $queryString = $requestData['queryString'];

    $request = [
      'queryString' => $requestData['queryString'],
    ];

    return $handler($request);
  }

  public static function post($route, $handler) {
    $reqData = self::retrieveRequestData();
    $isPostMethod = strcmp($reqData['method'], self::$POST) === 0;
    
    if (!$isPostMethod) {
      return false;
    }


    $uri = self::getUri($reqData);
    $doesRouteMatchUri = strcmp($route, $uri) === 0;

    if (!$doesRouteMatchUri) {
      return false;
    }

    $request = [
      'contentType' => $reqData['contentType'],
      'queryString' => $reqData['queryString'],
      'formData' => self::retrieveFormData(),
    ];
    
    return $handler($request);
  }

  public static function put($route, $handler) {
    
  }

  public static function patch($route, $handler) {
    
  }

  public static function delete($route, $handler) {

  }
}
