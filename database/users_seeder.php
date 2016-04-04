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
    ['first_name' => 'Don', 'last_name' => 'Moore','user_name' => 'donny71','email' => 'dmoore@jlister.com',
     'password' => password_hash('seetheworld1971', PASSWORD_DEFAULT) ],

     ['first_name' => 'Richie', 'last_name' => 'DeLosSantos','user_name' => 'Richard1292','email' => 'richie@jlister.com',
     'password' => password_hash('richierich', PASSWORD_DEFAULT) ],

     ['first_name' => 'Christian', 'last_name' => 'Laettner','user_name' => 'buzzerbeater','email' => 'chris@dukeuni.com',
     'password' => password_hash('rich', PASSWORD_DEFAULT) ],

     ['first_name' => 'Billy', 'last_name' => 'Sims','user_name' => 'Whiteshoes','email' => 'BillyBilly@gmail.com',
     'password' => password_hash('billy', PASSWORD_DEFAULT) ],

      ['first_name' => 'Willy', 'last_name' => 'Wonka','user_name' => 'Double W','email' => 'Willyl@factory.com',
     'password' => password_hash('willy', PASSWORD_DEFAULT) ],

      ['first_name' => 'Uma', 'last_name' => 'Thurman','user_name' => 'UmaT','email' => 'UmaUma@gmail.com',
     'password' => password_hash('uma', PASSWORD_DEFAULT) ],

     ['first_name' => 'admin', 'last_name' => 'admin','user_name' => 'admin','email' => 'admin@admin.com',
     'password' => 'admin']
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
    ['user_id' => 2,'title' => 'Bright Star Coders needs Instructors in Houston!', 'content' => 'Bright Star Coders looking for Instructors of JS,PHP, and Ruby.','date' => '2016-04-01 05:33:33'],
    ['user_id' => 3,'title' => 'Seeking entry-level positions in JS and PHP.', 'content' => 'Recent C.S. graduate looking for work in SA area.','date' => '2016-04-01 06:33:33'],
    ['user_id' => 4,'title' => 'Seeking senior-level Lisp position in Austin.', 'content' => 'Expert-level programmer in Lisp. Resume and references available.','date' => '2016-04-01 07:33:33'],
    ['user_id' => 5,'title' => 'Seeking senior-level Lisp position in Austin.', 'content' => 'Expert-level programmer in Lisp. Resume and references available.','date' => '2016-04-01 07:33:33'],
    ['user_id' => 6,'title' => 'Seeking entry-level position in Ruby', 'content' => 'Entry-level programmer in Ruby with great resume. Willing to relocate.','date' => '2016-04-02 08:33:33'],
     ['user_id' => 7,'title' => 'Seeking entry-level position anywhere', 'content' => 'Entry-level programmer. Youtube video course graduate living with parents.','date' => '2016-04-02 08:34:01'],
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