<?php

session_start();

function my_init() {
  if(isset($_COOKIE['session']))
  {
    $_SESSION = $_COOKIE['session'];
  }
}
add_action('init', 'my_init');

function my_before_unload() {
  if(isset($_SESSION))
  {
    $_COOKIE['session'] = $_SESSION;
  }
}
add_action('before_unload', 'my_before_unload');

?>