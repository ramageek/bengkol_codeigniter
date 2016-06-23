<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['member'] = 'c_member';
$route['member/edit-member'] = 'c_member/editMember';
$route['member/(:any)'] = 'c_member/$1';