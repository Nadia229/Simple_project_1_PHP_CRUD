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


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome to Nadia's Site</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">



        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
          
      
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/im1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/im2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/im3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Me</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="image/pic4.jpg" class="img-fluid aboutimg">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">I am Nadia.</h2>
			<p class="py-5">Hello, I am nadia. I have completed my Bsc from United International Univercity.
			Now I'm working as PHP intern at SoftSolvers Solution.I like to attend diffrent kind of programming contest, digital expo, innovation challenges.</p>
			<a href="about.php" class="btn btn-success">Check About Me More</a>
		</div>

	</div>
   </div>

</section>





<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Subscribe my page</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="feedback.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

       <div class="form-group">
				<label>E-mail</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>

            <div class="form-group">
				<label>comment</label>
				<textarea class="form-control" name="comment"></textarea>
			</div>

			<button type="submit" class="btn btn-success">Submit</button>


				
			</div>


			
		</form>
	</div>
  <div class="w-50 m-auto py-3">
          <a type="text" href="display.php" class="btn btn-success" onclick='location.href="display.php"'>Check Form</a>
      </div>

</section>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>