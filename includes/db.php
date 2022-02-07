<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = 'root';
$db['db_name'] = 'cms';


// $db['db_host'] = '127.0.0.1';
// $db['db_user'] = 'u4gxfjp6klfxf';
// $db['db_pass'] = 'w38emok43gvv';
// $db['db_name'] = 'dbgnnigahhwhgm';

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

