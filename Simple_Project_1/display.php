<!DOCTYPE html>
<html>
<head>

	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="css/styles.css" rel="stylesheet" media="all" />

</head>
<body>

    <div class="center-div">
    	<div class="py-3">
          <h1 class="text-center">Subscribers list</h1>
      </div>
    	<div class="center-div">

    		<div class="table-responsive">
    			<table>
    				<thead>
    					<tr>
    						<th>id</th>
    						<th>User</th>
    						<th>Mobile</th>
    						<th>E-mail</th>
    						<th colspan = "2">Operation</th>

    					</tr>
    				</thead>
    				<tbody>
                                       <?php 


                                                    $con = mysqli_connect('localhost', 'root', '', 'userdata');


                                                    if($con)
                                                    {
	                                                      #echo "Connection sucess";
                                                     }else{
	                                                          echo "No Connection";
                                                      }

                                                      global $res;

                                                      $selectquery = " SELECT * FROM `userinfodata` ";

                                                      $query = mysqli_query($con, $selectquery);

                                                      $nums = mysqli_num_rows($query);

                                                      while ($res = mysqli_fetch_assoc($query)) {
                                                      	$id = $res['id'];
                                                      	$user = $res['user'];
                                                      	$mobile = $res['mobile'];
                                                      	$email = $res['email'];

                                                      ?>
	                                                   

                                                          
                            <tr>
    						<td><?php echo $res['id']; ?> </td>
    						<td><?php echo $res['user']; ?></td>
    						<td><?php echo $res['mobile']; ?></td>
    						<td><?php echo $res['email']; ?></td>
    						<td><a href="update.php?id=<?php echo $id;?>&user=<?php echo $user;?>&mobile=<?php echo $mobile;?>&email=<?php echo $email;?>">Edit</a></td>
    						<td><a href="delete.php?id=<?php echo $id;?>">Delete</a></td>
    					   </tr>




                         <?php

	
	                       }
                                                      

                          ?>








    				</tbody>
    			</table>
    			
    		</div>
    	</div>
    	
    </div>
    <div class="py-5">
          <h1 class="text-center" onclick='location.href="index.php"'>Back</h1>
      </div>


</body>
</html>