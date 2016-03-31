<?php

require_once 'joblister_db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS posts');
//create national_parks table columns
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