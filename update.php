<?php
include 'config.php';
if(isset($_POST['update']))
{
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $em = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
     $uid = $_POST['uid'];

    $record = "UPDATE register SET firstname='$fn', lastname='$ln',email='$em',password='$pass',phone='$phone' WHERE uid='$uid'";
    $data = mysqli_query($conn,$record);
    if($data == TRUE)
    {
        header('location:view.php');
    }
}
    if(isset($_GET['uid'])) 
    {
        $uid=$_GET['uid'];
        $sql="SELECT * FROM register WHERE uid='$uid'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $fn=$row['firstname'];
                $ln=$row['lastname'];
                $em=$row['email'];
                $pass=$row['password'];
                $phone=$row['phone'];
                $uid = $row['uid'];
                
            }
          
    }
}
?>
<html>
    <head>
        <title>
            Update value
        </title>
        <body>
    <table>
        <tr>
            <td colsapn="2" style="text-align:center;">UPDATE FORM</td>
        </tr>
        <form action="" method="POST">
            <tr>
                <td>Enter Your Name</td>
                <input type="hidden" name="uid" value="<?php echo $uid;?>"> 
                <td><input type="text" name="firstname" value="<?php echo $fn;?>"></td>
            </tr>
            <tr>
                <td>Enter your lastname</td>
                <td><input type="text" name="lastname" value="<?php echo $ln;?>"></td>
            </tr>
            <tr>
                <td>Enter your email</td>
                <td><input type="email" name="email" value="<?php echo $em;?>"></td>
            </tr>
            <tr>
                <td>Enter your password</td>
                <td><input type="password" name="password" value="<?php echo $pass;?>"></td>
            </tr>
            <tr>
                <td>Enter your phone</td>
                <td><input type="phone" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
           
            <tr>
                <td><input type="submit" name="update" value="Update">
            <input type="reset" value="clear"></td>
            </tr>
        </form>
    </table>
        </body>
    </head>
</html>