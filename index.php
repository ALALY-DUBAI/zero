<?php
require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/zero/') {
  require 'controllers/index.php';
} else if ($uri === '/zero/about') {
  require 'controllers/about.php';
} else if ($uri === '/zero/contacts') {
  require 'controllers/contacts.php';
} else {
  require 'controllers/404.php';
}
 

// switch ($uri) {
//   case "/zero/":
//     require 'controllers/index.php';
//     break;
//   case "/zero/about":
//     require 'controllers/about.php';
//     break;
//   case "/zero/contacts":
//     require 'controllers/contacts.php';
//     break;
//   default:
//   require 'controllers/404.php';
// }