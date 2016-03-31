<?php

require_once 'joblister_db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');
//create national_parks table columns
$sql = <<<QUERY
CREATE TABLE users(
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(100) NOT NULL,
last_name VARCHAR (100) NOT NULL,
user_name VARCHAR (100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
PRIMARY KEY(id)

)

QUERY;
$dbc->exec($sql);