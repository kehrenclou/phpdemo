<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

//connect to database and execute a query



$db = new Database();

$post = $db->query("select * from posts where id = 2")->fetch(PDO::FETCH_ASSOC);



// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }