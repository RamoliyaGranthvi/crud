<?php

    include 'config.php';
    if(isset($_POST['submit']))
    {
        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $em = $_POST['email'];
        $pw = $_POST['password'];
        $ph = $_POST['phone'];
    

        $sql = "INSERT INTO register (firstname, lastname, email, password, phone) VALUES ('$fn','$ln','$em','$pw','$ph')";
        $result=mysqli_query($conn, $sql);

        if($result == TRUE)
        {
            header('location:login.php');
        }
    }

?>