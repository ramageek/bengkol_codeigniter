<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['member'] = 'c_member';
$route['member/edit-member'] = 'c_member/editMember';
$route['member/bengkel/hapus/(:num)'] = 'c_member/hapusBengkel/$1';
$route['member/bengkel/tambah'] = 'c_member/tambahBengkel';
$route['member/(:any)'] = 'c_member/$1';