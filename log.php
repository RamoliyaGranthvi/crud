<?php
 include 'config.php';
 $username = $_POST["user"];
 $password = $_POST["pass"];

//  $username = stripcslashes($username);
//  $password = stripcslashes($password);
//  $username = mysqli_real_esacpe_string($conn,$username);
//  $password = mysqli_real_esacpe_string($conn,$password);

 $sql = "SELECT * FROM register WHERE firstname = '$username' and password = '$password'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);

 if($count == 1){
    header('location: view.php');
 }
 else{
    echo"<h1> Login failed.invalid username or password.</h1>";
    
}
?>