<!DOCTYPE html>
<html lang="en">

<!-- Start of head -->

	<head>
		<meta name="viewport" content="width=device-with, initial-scale=1">
		<meta charset="utf-8">
		<meta name="Author" content="Mousa Tour&eacute;">
		
		<title>
			VSU Financial Advisor
		</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hackathon.css" > 
	</head>

<!--_Start Body--->
	<body>
	
<!--Start Header-->	
		<header class = "sticky-top">
			<div class="header container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<h5>
							VSU Financial Advisor
						</h5>
					</div>
				</div>
			</div>
			
			<!--Start Navbar-->	
						
			<nav class = "navbar navbar-expand-lg navbar-expand-md">
				<div class = "container-fluid">
					<a class = "navbar-brand" href="index.html">
						<img src = "https://www.vsu.edu/files/images/logos/vsu-since-1882-logo-multi-colored.svg" alt="Placeholder for Logo That Links to the homepage" width="70px">
						</a>
				
					<button class= "navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				
						<span class="navbar-toggler-icon"></span>
					
					</button>
				
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item">
								<a class = "nav-link" href="financial-calc.php">Financial Calculator</a>
							</li>
							
							<li class="nav-item">
								<a class = "nav-link" href="jobs.html">Job Search</a>
							</li>
							
							<li class="nav-item">
								<a class = "nav-link" href="financialadvice.html">Financial Education</a>
							</li>
							
							<li class="nav-item">
								<a class = "nav-link" href="#">Contact Us</a>
							</li>

						</ul>
					</div>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>	
	<!--End Navbar-->	
			
		</header>
<!--End Header--->	

						
		<link rel="stylesheet" href="css/Save-goal.css" >
<body>
<div class = "form">
<h2> Saving goal </h2>
<?php
	error_reporting(E_ALL ^ E_WARNING); 
	
?>

<form method = "post" action ="financial-calc.php">
<label for="Money towards">Money already saved towards goal</label><br>
    <input type="text" id="Money" name="Money" placeholder="$0"><br>
    <label for="save goal">Your savings goal</label><br>
    <input type="text" id="Save" name="Save" placeholder="$0">

    <input type="submit" value="Submit">
  </form>

  </div>


		<footer class = "">

			<div class="footer container-fluid">
				<div class="row justify-content-md-center">
				
					<div class="col-2 col-sm-2 col-md-2 col-lg-2">
						<a href="https://www.vsu.edu/">
							<img alt="Virginia State University" class="mb-1 vsulogo" src="https://www.vsu.edu/files/images/logos/vsu-since-1882-logo-white.svg" width="90%" height="90%">
						</a>
					</div>
					
					
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 address">
						<address>
							<strong>Virginia State University</strong>
							<br>1 Hayden Dr.
							<br>Petersburg, VA 23806
							<br><a href="tel:8045245000">804-524-5000</a>
						</address>	
					</div><!-- /.address -->
					
						
					<div class="col-2 col-sm-2 col-md-2 col-lg-2">

					</div>
				</div>				
			</div><!-- /.inner -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
		
	</body>

</html>
