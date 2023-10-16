<?php
include 'config.php';
$sql = "SELECT*FROM register";
$result = mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>View Form</title>
        <style>
            table{
                margin-top:80px;
            }

        </style>
    </head>
    <body>
    <center>
        <table border="1">
            <tr>
                <th colspan="7" style="text-align:center;">View All Data Form Register</th>
            </tr>
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>pass</th>
                <th>monileno</th>
                
                <th>Delete</th>
                <th>Edit</th>
            </tr>
           <?php
                  if(mysqli_num_rows($result)>0)
                  {
                        while($row=mysqli_fetch_assoc($result))
                        {?>
                        <tr>
                            <td><?php echo $row['uid'];?></td>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['phone'];?></td>
                           

                            <td><a href="delete.php?uid=<?php echo $row['uid'];?>">Delete</a></td>
                            <td><a href="update.php?uid=<?php echo $row['uid'];?>">Edit</a></td>
                        </tr>
                        <?php }

                        }
                  
                  ?>
                  
        </table>
    </center>
    </body>
</html>