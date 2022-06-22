<?php
defined('BASEPATH') or exit('No direct script access allowed');


// $route['akun']['GET'] = 'akun/index';
// $route['akun/login']['GET'] = 'akun/login';
// $route['akun/register']['GET'] = 'akun/register';

// $route['login']['GET'] = 'akun/index';
// $route['login/register']['GET'] = 'akun/register';
// $route['login/akun']['POST'] = 'akun/auth';
// $route['login/logout']['POST'] = 'akun/logout';

$route['login']['GET'] = 'login/index';
$route['login/auth']['POST'] = 'login/auth';
$route['login/register']['GET'] = 'login/register';
$route['login/logout']['POST'] = 'login/logout';
$route['login/insert']['POST'] = 'login/insert_data';

$route['admin']['GET'] = 'admin/index';
// $route['admin/dashboard']['GET'] = 'admin/dashboard';
$route['admin/jenis_layanan']['GET'] = 'admin/jenis_layanan';
$route['admin/jenis_tes']['GET'] = 'admin/jenis_tes';

$route['peserta/rumah']['GET'] = 'peserta/rumah';

$route['welcome/(:any)']['GET'] = 'welcome/index';

$route['default_controller'] = 'welcome';
$route['404_override'] = "";
$route['translate_uri_dashes'] = FALSE;
