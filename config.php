<?php

#===================
# Файл конфигураций.
#===================

$domains = array();

$domains[0]['domain'] = 'garderob5.info';
$domains[0]['name'] = 'Каталог одежды';
$domains[0]['template'] = 'templates/first/';
$domains[0]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[1]['domain'] = 'shop.promenad22.info';
$domains[1]['name'] = 'Скидки и распродажа';
$domains[1]['template'] = 'templates/second/';
$domains[1]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[2]['domain'] = 'store.sapato22.info';
$domains[2]['name'] = 'Акции и распродажи';
$domains[2]['template'] = 'templates/third/';
$domains[2]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

/*
$domains[0]['domain'] = 'shop.garderob5.info';
$domains[0]['name'] = 'Каталог акций и распродаж';
$domains[0]['template'] = 'templates/first/';
$domains[0]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[1]['domain'] = 'store.promenad22.info';
$domains[1]['name'] = 'Скидки и акции';
$domains[1]['template'] = 'templates/second/';
$domains[1]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[2]['domain'] = 'sapato22.info';
$domains[2]['name'] = 'Одежда по скидкам';
$domains[2]['template'] = 'templates/third/';
$domains[2]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[0]['domain'] = 'store.garderob5.info';
$domains[0]['name'] = 'Акции и распродажи';
$domains[0]['template'] = 'templates/first/';
$domains[0]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[1]['domain'] = 'promenad22.info';
$domains[1]['name'] = 'Распродажа одежды';
$domains[1]['template'] = 'templates/second/';
$domains[1]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';

$domains[2]['domain'] = 'shop.sapato22.info';
$domains[2]['name'] = 'Акции распродажи скидки';
$domains[2]['template'] = 'templates/third/';
$domains[2]['admitad'] = 'http://ad.admitad.com/goto/499ce9e0462b1ee174ca4a2f625b4f';
*/

define('DOMAINS', serialize($domains));
define('KEYWORDS', 'keywords/.txt');
define('CSV', '1.csv');
//define('CSV', '2.csv');
//define('CSV', '3.csv');

/* End of file config.php */