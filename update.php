<?php require('./connection.php');
if(isset($_GET["id"])){
$id = $_GET["id"];

$query = "SELECT * FROM `user_info` where id = '$id' limit 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
}
?>
<form action="update.php" method="post">
        <input type="text" name="id" value="<?php echo $id?>">
        <div class="namePhone">
                <div>
                    <label for="Name">Your Name</label><br>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="Phone">Phone No</label><br>
                    <input type="tel" name="phone">
                </div>
            </div>
            <div class="email">
                <label for="email">Email ID</label><br>
                <input type="email" name="email">
            </div>
            <div class="message">
                <label for="message">Your Message</label><br>
                <textarea rows="12" cols="88" name="comment" form="usrform" name = "message"></textarea>
            </div>
    </form>
<?PHP
    if(isset($_POST["id"]) &&isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"])){
        $id = $_POST['id'];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        $query = "UPDATE user_info SET name = '$name', phone = '$phone', email = '$email' WHERE id = '$id';";
        if($connection->query($query) == true){
            //redirect to a file that fetches all data
            header('location:fetch.php');
        }
        else {
            echo $connection -> error;
        }
    }?>