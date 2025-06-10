<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| product config
|--------------------------------------------------------------------------
|
|
 */

$config['country'] = 'Kenya';
$config['companyname'] = 'NWCD';
$config['companyemail']   = 'achim@amband.co.ke';
$config['productname'] = 'NWCD';
$config['smsshortcode'] = '1234';

$config['baseurl'] = 'http://localhost/nwcd/';
$config['adminurl'] = 'http://localhost/admin-nwcd/';

$config['product_logo_relative'] = 'assets/img/logo-government.jpg';
$config['logo'] = 'assets/img/logo_wrti.png';
$config['product_logo_web'] = $config['baseurl'] .$config['product_logo_relative'];
 //support team emails
$config['support_staff'][] = ['achim@amband.co.ke','Achim Nyabuto'];
