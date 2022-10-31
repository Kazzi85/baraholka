<?php
require_once 'config.php';

$connect_settings = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME ;

$dbh = new PDO($connect_settings, DB_USER, DB_PASSWORD);





