<?php

// CONFIG file, where we start a session(for users) and connect to MYSQL

session_start();
set_time_limit(0);
error_reporting(E_ALL);

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'vlad';

$connect = mysql_connect($host, $user, $pass) or die('error connecting');
$db_select = mysql_select_db($db) or die('error selecting database');


?>