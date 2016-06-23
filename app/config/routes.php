<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['member'] = 'member';
$route['member/{any}'] = 'member';
$route['member/edit-member'] = 'member/editMember';