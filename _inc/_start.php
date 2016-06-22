<?php
/**
 * Get page folder dynamically based on url.
 *
 * @return string Page folder.
 */
function getPageFolder() {
  $path = $_SERVER['PATH_INFO'];
  if (!$path) {
    $path = '/index';
  }
  return $path;
}

/**
 * Get js path dynamically based on url.
 *
 * @return string Js path.
 */
function getPageJsPath() {
  $folder = getPageFolder();
  return '/assets/js/pages' . $folder . '.js';
}

/**
 * Get css path dynamically based on url.
 *
 * @return string Css path.
 */
function getPageCssPath() {
  $folder = getPageFolder();
  return '/assets/css/pages' . $folder . '.css';
}
