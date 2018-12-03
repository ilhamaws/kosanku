<?php
  function menuActive($url){
    return $_SERVER['REQUEST_URI'] == $url ? 'menu-active' : '';
  }
?>
