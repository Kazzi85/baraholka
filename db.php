<?php
require_once 'config.php';

$dbh = new PDO("
	mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . '",
    DB_USER,
    DB_PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
);


