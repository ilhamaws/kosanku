<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = "pages/index";
$route['tentang'] ="pages/tentang";
$route['kosan'] = "pages/kosan";
$route['berita'] = "pages/berita";
$route['kontak'] = "pages/kontak";
$route['detail'] = "pages/detail";
$route['register'] = "authentication/register";
$route['login'] = "authentication/login";
$route['logout'] = "authentication/logout";
