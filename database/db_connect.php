<?php

require_once 'joblister_db_connect.php';

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,DB_USER,PASSWORD);
$dbc ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


