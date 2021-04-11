<?php
include('users.php');

$db = new PDO('mysql:host=localhost;dbname=blog', 'nextasy', 'kD7BvtDbHIBnsFum');
$usersRepo = new UsersRepo($db);
?>
