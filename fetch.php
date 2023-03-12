<?php require('connection.php');
$query = "SELECT * FROM user_info";
$result = mysqli_query($connection, $query);
//execute query
?>
<body>
    <!-- while Wifi@PadmaShree2023# -->
    <?php if (mysqli_num_rows($result)> 0) {?>
        <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>phone</td>
                <td>email</td>
            </tr>
            <?php while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><a href = "delete.php?id=<?php echo $row['id']; ?>">Delete</td>
                    <td><a href = "update.php?id=<?php echo $row['id']; ?>">Edit</td>
                    
                </tr>
                <?php } ?>  
        </table>
        <a href ="form.php">Go back</a>
    
        <?php
    } 
    else{
        echo "No data";
    }
    ?>
</body>