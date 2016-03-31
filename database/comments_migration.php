<?php

require_once 'joblister_db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS comments');
//create national_parks table columns
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