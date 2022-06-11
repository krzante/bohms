<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['patient_records'] = 'patient_records/index';
$route['default_controller'] = 'pages/view';
$route['admindashboard'] = 'Pages/admindashboard';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
