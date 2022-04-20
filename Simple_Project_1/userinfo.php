<?php 


$con = mysqli_connect('localhost', 'root');


if($con)
{
	echo "Connection sucess";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'userdata');



global $user;
global $email;
global $comment;
 



if(isset($_POST['user'])){
      $user = $_POST['user']; 
 }
if(isset($_POST['mobile'])){
      $mobile = $_POST['mobile']; 
 }
if(isset($_POST['email'])){
      $email = $_POST['email']; 
 }

 
 

$query = " INSERT INTO `userinfodata`(`id`, `user`, `mobile`, `email`) VALUES ('[value-1]','$user','$mobile','$email') ";

mysqli_query($con, $query);

header('location:login.php')


?>