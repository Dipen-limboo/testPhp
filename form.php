<?php require('./connection.php'); ?>
<?php

if(isset($_GET["name"]) && isset($_GET["phone"]) && isset($_GET["email"]) && isset($_GET["message"])){
    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $message = $_GET["message"];

// query insert into user_info with values
$query = "INSERT INTO user_info(name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
echo "<br>";
echo "<br>"; 

if($connection->query($query) == True){
    //redirect to a file that fetches all /jkl;\97
    header('location:index.html');
}
else {
    echo $connection -> error;
}
}
?>