<?php
include 'config.php';
if(isset($_GET['uid']))
{

$uid = $_GET['uid'];
$sql =  "DELETE FROM register WHERE uid='$uid'";
$result=mysqli_query($conn,$sql);
if($result==TRUE)
{
    header('location:view.php');
}
}
?>