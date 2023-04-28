<!DOCTYPE html>
<html lang="en">
<style>

input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

body {
  background-color: #bf873d;
}
@property --p{
  syntax: '<number>';
  inherits: true;
  initial-value: 1;
}

.pie {
  --p:20;
  --b:22px;
  --c:darkred;
  --w:200px;

  width: var(--w);
  aspect-ratio: 1;
  position: relative;
  display: inline-grid;
  margin: 5px;
  place-content: center;
  font-size: 25px;
  font-weight: bold;
  font-family: sans-serif;
}
.pie:before,
.pie:after {
  content: "";
  position: absolute;
  border-radius: 50%;
}
.pie:before {
  inset: 0;
  background:
    radial-gradient(farthest-side,var(--c) 98%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.pie:after {
  inset: calc(50% - var(--b)/2);
  background: var(--c);
  transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}
.animate {
  animation: p 1s .5s both;
}
.no-round:before {
  background-size: 0 0, auto;
}
.no-round:after {
  content: none;
}
@keyframes p{
  from{--p:0}
}
 
 
  .test{
  
	 text-align: center;
	
 }
 
</style>
<!-- Start of head -->

	<head>
		<meta name="viewport" content="width=device-with, initial-scale=1">
		<meta charset="utf-8">
		<meta name="Author" content="Mousa Tour&eacute;">
		
		<title>
			Data Consulting Academy
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
						<img src = "vsucolorlogo.svg" alt="Placeholder for Logo" width="70px">
						</a>
				
					<button class= "navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				
						<span class="navbar-toggler-icon"></span>
					
					</button>
				
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item">
								<a class = "nav-link" href="#">Financial Calculator</a>
							</li>
							
							<li class="nav-item">
								<a class = "nav-link" href="#">Job Search</a>
							</li>
							
							<li class="nav-item">
								<a class = "nav-link" href="#">Financial Education</a>
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

						

		<main>
		
		<?php
		error_reporting(E_ALL ^ E_WARNING); 
	session_start();
	$expense_holder = $_POST['expense'];
	$income_holder = $_POST['income'];
	if(empty($_SESSION["Money"])){
		$_SESSION["Money"] = $_POST['Money'];
		$_SESSION["Save"] = $_POST['Save'];
	}
	$Money_towards = $_POST['Money'];
	$Saving_Goal = $_POST['Save'];
	if (empty($Saving_Goal&&$Money_towards)) {
		$Money_towards = $_SESSION["Money"];
		$Saving_Goal = $_SESSION["Save"];
		
	}
	if (!empty($expense_holder)) {
		$_SESSION["current_balance"] -= $expense_holder;
	}else if(!empty($income_holder)){
		$_SESSION["current_balance"] += $income_holder;
	}else{
		$_SESSION["current_balance"] = 0;
	}
	if ($_SESSION["current_balance"] <=0){
		 ?>
	<style>
	.current-balance{
		color: red;
	}
	
	</style>
	 <?php
	}		
  ?>
  <div class = "current-balance-title">
  <h2> Current Balance </h2>
  <div class = "current-balance">
  <?php
  echo '<h2> $'.$_SESSION["current_balance"].'</h2>'
  ?>
  <p id="demo" onclick="myFunction()"></p>


  <button type="button" onclick="window.location='expense.php';">Add a expense</button>
	
  <button type="button" onclick="window.location='income.php';">Add income</button>
  
  </div>
  </div>
<div class = "Saving-goal">
<h2> Saving goal </h2>
<?php

$test_var = $Money_towards/$Saving_Goal;
$test_var /= .01;
echo '<div class="pie animate" style="--p:'.$test_var.';--c:lightgreen"> $'.$Money_towards.' out <br>of $'.$Saving_Goal.' <br>saved</div>'
?>
  </div>
  <div class = "reset">
  <button type="button" onclick="window.location='Budget.php';">Reset your saving goal</button>
  </div>
			
		</main>


		<footer class = "fixed-bottom">

			<div class="footer container-fluid">
				<div class="row justify-content-md-center">
				
					<div class="col-2 col-sm-2 col-md-2 col-lg-2">
						<a href="https://www.vsu.edu/">
							<img alt="Virginia State University" class="mb-1 vsulogo" src="vsu-since-1882-logo-white.svg" width="90%" height="90%">
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