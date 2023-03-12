<!-- Here we connect the mysql with the php -->
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'users';

$connection = mysqli_connect($server, $username, $password, $db);
?>



<!-- go to localhost/phpadmin -->