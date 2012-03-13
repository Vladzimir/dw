<?php

#===================
# Файл конфигураций. 
#===================

$domains = array();

$domains[0]['domain'] = 'obuv.elitno.net';
$domains[0]['name'] = 'Большой выбор обуви';
$domains[0]['template'] = 'templates/sixth/';
$domains[0]['admitad'] = 'http://ad.admitad.com/goto/1899e0cf072b1ee174ca43b8fa8c2a';

$domains[1]['domain'] = 'tufli.elitno.net';
$domains[1]['name'] = 'Женские элитные туфли';
$domains[1]['template'] = 'templates/third/';
$domains[1]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[2]['domain'] = 'sapogi.elitno.net';
$domains[2]['name'] = 'Весенние сапоги';
$domains[2]['template'] = 'templates/fourth/';
$domains[2]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

/*
$domains[0]['domain'] = 'klimattech.elitno.net';
$domains[0]['name'] = 'Климатическая техника';
$domains[0]['template'] = 'templates/tenth/';

$domains[0]['domain'] = 'hometech.elitno.net';
$domains[0]['name'] = 'Техника для дома';
$domains[0]['template'] = 'templates/tenth/';

$domains[0]['domain'] = 'kitchentech.elitno.net';
$domains[0]['name'] = 'Кухонная техника';
$domains[0]['template'] = 'templates/tenth/';
*/
define('DOMAINS', serialize($domains));
define('KEYWORDS', 'keywords/obuv.txt');
define('CSV', 'csv.csv');

/* End of file config.php */