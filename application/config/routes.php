<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Event routes
$route['create-event/(:any)/(:any)'] = 'create_events/view_create_event/$1/$2';
$route['create/(:any)/(:any)'] = 'create_events/create/$1/$2';

// Hotspots routes
$route['create-hotspot/(:any)/(:any)'] = 'hotspots/view_create_hotspot/$1/$2';
$route['hotspot/create/(:any)/(:any)'] = 'hotspots/create_hotspot/$1/$2';
$route['edit-hotspot/(:any)'] = 'hotspots/edit_hotspot_view/$1';
$route['hotspot/update/(:any)'] = 'hotspots/update/$1';
$route['delete-hotspot/(:any)'] = 'hotspots/delete/$1';

$route['patient_records'] = 'patient_records/index';
$route['default_controller'] = 'pages/view';
$route['admindashboard'] = 'Pages/admindashboard';
$route['(:any)'] = 'pages/view/$1';
$route['Show_Events/view/(:any)'] = 'Show_Events/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
