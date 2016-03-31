<?php

require_once 'joblister_db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS comments');

$dbc->exec('DROP TABLE IF EXISTS posts');

$dbc->exec('DROP TABLE IF EXISTS users');


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



$sql = <<<QUERY
CREATE TABLE posts(
post_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
user_id INT UNSIGNED NOT NULL,
title VARCHAR(100) NOT NULL,
content VARCHAR (500) NOT NULL,
date DATETIME,
PRIMARY KEY(post_id),
foreign key(user_id) references users(id)

)

QUERY;
$dbc->exec($sql);




 $sql = <<<QUERY
 CREATE TABLE comments(
 comment_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
 comment VARCHAR(500) NOT NULL,
 post_id INT UNSIGNED NOT NULL,
 user_id INT UNSIGNED NOT NULL,
 date DATETIME,
 foreign key(post_id) references posts(post_id),
 foreign key(user_id) references users(id),
 PRIMARY KEY(comment_id)
 )

QUERY;
$dbc->exec($sql);














