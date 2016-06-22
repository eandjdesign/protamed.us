<?php

  // die('<pre>' . print_r($_SERVER['PATH_INFO'], 1) . '</pre>');
  // die('<pre>' . print_r($_SERVER, 1) . '</pre>');


  global $customCss;
  $customCss = includePageCssFile();

  function includePageCssFile() {

    $pathInfo = $_SERVER['PATH_INFO'];

    if ($pathInfo) {
      $pathToCustomCss = $pathInfo;
    } else {
      $pathToCustomCss = '/index';
    }

    return $pathToCustomCss;

  }
?>
