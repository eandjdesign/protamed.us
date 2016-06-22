<?php

  function getPageCssFile() {

    $pathInfo = $_SERVER['PATH_INFO'];

    if ($pathInfo) {
      $fileToInclude = $pathInfo;
    } else {
      $fileToInclude = '/index';
    }

    $pathToCustomCss = '/assets/css/pages' . $fileToInclude . '.css';

    return $pathToCustomCss;

  }
?>
