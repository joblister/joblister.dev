<?php
require 'joblister_db_connect.php';
require 'db_connect.php';
// First, add a query to delete all the records from the table
//CAN'T TRUNC A TABLE WITH A FOREIGN KEY
$truncate = 'DELETE FROM posts';
$dbc->exec($truncate);

$truncate = 'DELETE FROM users';
$dbc->exec($truncate);







$Users = [
    ['first_name' => 'Don', 'last_name' => 'Moore','user_name' => 'donny71','email' => 'dmoore@jlister',
     'password' => password_hash('seetheworld1971', PASSWORD_DEFAULT) ],

     ['first_name' => 'Richie', 'last_name' => 'DeLosSantos','user_name' => 'Richard1292','email' => 'richie@jlister',
     'password' => password_hash('richierich', PASSWORD_DEFAULT) ],

     ['first_name' => 'Christian', 'last_name' => 'Laettner','user_name' => 'buzzerbeater','email' => 'chris@dukeuni.com',
     'password' => password_hash('beatUNC', PASSWORD_DEFAULT) ],
];
$stmt = $dbc->prepare('INSERT INTO users (first_name, last_name, user_name, email, password)
    VALUES (:first_name, :last_name, :user_name, :email,:password)');
foreach ($Users as $user) {
    $stmt->bindValue(':user_name', $user['user_name'], PDO::PARAM_STR);
    $stmt->bindValue(':first_name', $user['first_name'], PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $user['last_name'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
    $stmt->bindValue(':password', $user['password'], PDO::PARAM_STR);
    $stmt->execute();
}


$posts = [
    ['user_id' => 1,'title' => 'Javascript developer Needed in Austin!', 'content' => 'We are a new company looking for enthusiastic programmers to help us grow. We have plenty of work, but not enough programmers. Contact us at 555-5555.','date' => '2016-03-31 03:33:33'],

    
];
$stmt = $dbc->prepare('INSERT INTO posts (user_id, title, content, date)
    VALUES (:user_id, :title, :content,:date)');
foreach ($posts as $post) {
    $stmt->bindValue(':user_id', $post['user_id'], PDO::PARAM_INT);
    $stmt->bindValue(':title', $post['title'], PDO::PARAM_STR);
    $stmt->bindValue(':content', $post['content'], PDO::PARAM_STR);
    $stmt->bindValue(':date', $post['date'], PDO::PARAM_STR);
    $stmt->execute();
}


?>