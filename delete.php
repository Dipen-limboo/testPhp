<?php require('connection.php');
$id =$_GET["id"];
$query = "DELETE FROM user_info where id = '$id'";
// echo $query;die;
if ($connection->query($query) ==TRUE) {
    header ('Location:fetch.php');
    
}
else
{
    echo $connection->error;
}
?>