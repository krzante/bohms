<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['create-event/(:any)/(:any)'] = 'create_events/view_create_event/$1/$2';
$route['create/(:any)/(:any)'] = 'create_events/create/$1/$2';

$route['patient_records'] = 'patient_records/index';
$route['default_controller'] = 'pages/view';
$route['admindashboard'] = 'Pages/admindashboard';
$route['(:any)'] = 'pages/view/$1';
$route['Show_Events/view/(:any)'] = 'Show_Events/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
