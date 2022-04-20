<?php 


$con = mysqli_connect('localhost', 'root','','userdata');
error_reporting(0);

$id = $_GET['id'];

$query = " DELETE FROM `userinfodata` WHERE id = '$id' ";


$data = mysqli_query($con,$query);

  if($data){
     echo "Deleted";
}

header('location:display.php')




?>