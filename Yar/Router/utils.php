<?php
  function getUri($uri) {
    $delimiter = "?";
    $uriContainsQueryDelimiter = strpos($uri, $delimiter) !== false;

    if ($uriContainsQueryDelimiter) {
      $uriWithoutQueryDelimiter = substr(
        $uri, 0, strpos($uri, $delimiter)
      );

      return $uriWithoutQueryDelimiter;
    }

    return $uri;
  }

  function getRequestData() {
    return [
      'uri' => getUri($_SERVER['REQUEST_URI']),
      'method' => $_SERVER['REQUEST_METHOD'],
      'queryString' => $_SERVER['QUERY_STRING'],
      'contentType' => $_SERVER['CONTENT_TYPE'],
      'POST' => $_POST,
      'GET' => $_GET,
    ];
  }

  function routeMethodMatchesRequestMethod($method, $request) {
    return ($method === $request['method']) ? true : false;
  }

  function routeUriMatchesRequestUri($route, $request) {
    $routeMatchesUri = strcmp($route, $request['uri']) === 0;
    return ($routeMatchesUri) ? true : false;
  }

  function handleRequest($route, $httpMethod, $request, $handler) {
    $doesMethodMatch = routeMethodMatchesRequestMethod($httpMethod, $request);

    if (!$doesMethodMatch) {
      return false;
    }

    $doesRouteMatch = routeUriMatchesRequestUri($route, $request);

    if (!$doesRouteMatch) {
      return false;
    }

    return $handler($request);
  }
