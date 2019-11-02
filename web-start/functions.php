<?php
define("WEB_TITLE", "Honzíkova cesta");

function getWebTitle() {
  return WEB_TITLE;
}

function getYear() {
  return date('Y');
}

function loadData($fileName) {
  $data = file_get_contents($fileName); // from JSON
  return json_decode($data, true);
}

function saveData($fileName, $content) {
  $content = json_encode($content, JSON_PRETTY_PRINT); // to JSON
  file_put_contents($fileName, $content);
}

?>