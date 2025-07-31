<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/view';

$route['homepage'] = 'pages/homepage';
$route['incident_report'] = 'pages/incident_report';
$route['help'] = 'pages/help';
$route['log_in'] = 'pages/log_in';
$route['logout'] = 'pages/logout';
$route['lock'] = 'pages/lock';
$route['lock_user_screen'] = 'pages/lock_user_screen';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['signup'] = 'users/signup';

