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
if(isset($_POST['email'])){
      $email = $_POST['email']; 
 }
if(isset($_POST['comment'])){
      $comment = $_POST['comment']; 
 }

 
 

$query = " INSERT INTO `feedback`(`id`, `user`, `email`, `comment`) VALUES ('[value-1]','$user','$email','$comment') ";

mysqli_query($con, $query);

header('location:index.php')


?>