<?php 


$con = mysqli_connect('localhost', 'root','','userdata');
error_reporting(0);

$id = $_GET['id'];
$user = $_GET['user'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];


if($con)
{
	echo "Connection sucess";
}else{
	echo "No Connection";
}



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
  
  
</head>
<body>


	



<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Update Information</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="update.php" method="get">
			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id" value="<?php echo "$id" ?>" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" value="<?php echo "$user" ?>" autocomplete="off" class="form-control">
			</div>

             <div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" value="<?php echo "$mobile" ?>" autocomplete="off" class="form-control">
			</div>

             <div class="form-group">
				<label>E-mail</label>
				<input type="text" name="email" value="<?php echo "$email" ?>" autocomplete="off" class="form-control">
			</div>

  

			<input type="submit" name="submit" class="btn btn-success" value="submit" /> 


				
			</div>
			
		</form>
	</div>

</section>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


<?php

if($_GET[submit])
{
	echo "clicked";
	$id = $_GET['id'];
    $user = $_GET['user'];
    $mobile = $_GET['mobile'];
    $email = $_GET['email'];

  $query = " UPDATE `userinfodata` SET `id`='$id',`user`='$user',`mobile`='$mobile',`email`='$email' WHERE id = '$id' ";

  $data = mysqli_query($con,$query);

  if($data){
     echo "updated";
}

header('location:display.php');

}



?>



