<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Feature Receipts</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-light  border-bottom">
  			<div class="container-fluid ">
    			<a class="navbar-brand fs-4" href="#">REPSLIPS LOGO</a>
    				<div class="dropdown">
				  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				    <i class="bi bi-person-circle p-1"></i>
								   User's First Name
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				    <li><a class="dropdown-item" href="#">Action</a></li>
				    <li><a class="dropdown-item" href="#">Another action</a></li>
				    <li><a class="dropdown-item" href="#">Something else here</a></li>
				  </ul>
				</div>
 			</div>
		</nav>
		<div class="row w-100 mt-1 h-100">
		    <div class="col-lg-2 border p-1" style="height: auto;">
		    	<ul class="list-group list-group-flush mt-5 p-1 nav flex-column">
			      <li class="nav-item">
			      	<a href="dashboard.html" class="nav-link fs-6 text-dark fw-bold">
			      		<i class="bi bi-menu-button-wide"></i> Dashboard</a>
			      </li>
			      <li class="nav-item ">
			      	<a href="All-Receipts.php" class="nav-link fs-6 fw-bold text-dark">
			      	<i class="bi bi-chevron-down"></i>All Receipts</a>
			      </li>
			      <li class="nav-item ">
			      	<a href="Recent-Receipts.php" class="nav-link fs-6 fw-bold text-dark"><i class="bi bi-chevron-right"></i>Recent Receipts</a>
			      </li>
			      <li class="nav-item active bg-light">
			      	<a href="Feature-Receipts.php" class="nav-link fs-6 fw-bold text-dark"><i class="bi bi-chevron-right"></i>Feature Receipts</a>
			      </li>
			      <li class="nav-item">
			 		<a href="taxes.php" class="nav-link fs-6 fw-bold text-dark"><i class="bi bi-chevron-right"></i>Taxes</a></li>
		  		</ul>
		  		<ul class="nav flex-column ms-0 ">
			  		<li class="p-1 fs-6 fw-bold">
			  			<a href="notification.html" class="nav-link fs-6 text-dark fw-bold"><i class="bi bi-bell-fill" ></i> Notification</li></a>
			  		<li class="p-1 fs-6 fw-bold"><a href="qr-code.html" class="nav-link fs-6 text-dark fw-bold"><i class="bi bi-upc-scan"></i> QR Code</li></a>
			  		<li class="p-1 fs-6 fw-bold"><a href="setting.html" class="nav-link fs-6 text-dark fw-bold"><i class="bi bi-gear-fill"></i> Settings</li></a>
			  	</ul>
		    </div>
		    <div class="col-lg-8 border">
		    	<h6 class="mt-5 ms-3">Feature Receipts</h6>
		    	<div class="mt-5 ms-3 border " style="width: 250px; height: 25px;">
		    		<i class="bi bi-search ms-1 mb-2" style="font-size: 13px;"></i>
		    		<input type="text" class="h-1" placeholder="Search" style="border: none; height:20px; width:225px;">
		    	</div>
				<table class="table table-bordered mt-3">
				  <thead>
				    <tr>
				      <th scope="col">Dates</th>
				      <th scope="col">Product Description (Tick Star to include as Tax)</th>
				      <th scope="col">Price ($)</th>
				      <th scope="col">Total ($)</th>
				    </tr>
				  </thead>
				  <tbody class="">
				    <tr>
				      <th scope="row">2021-04-21</th>
				      <td>
				      	<ul style="list-style: none;">
				      		<li class="bg-light"><i class="bi bi-star">Hand Towel</i></li>
				      		<li><i class="bi bi-star-fill">Gatorade</i></li>
				      		<li class="bg-light"><i class="bi bi-star">T-Shirt</i></li>
				      		<li><i class="bi bi-star">Pins</i></li>
				     	 </ul></td>
				      <td>
				      	<ul style="list-style: none;">
				      		<li class="bg-light">5.88</li>
				      		<li>150.99</li>
				      		<li class="bg-light">150</li>
				      		<li>14.12</li>
				      	</ul></td>
				      <td>320.99</td>
				    </tr>
				    <tr>
				      <th scope="row">2021-04-21</th>
				       <td>
				      	<ul style="list-style: none;">
				      		<li class="bg-light"><i class="bi bi-star">Roller Blades</i></li>
				      		<li><i class="bi bi-star-fill">Helmart</i></li>
				      		<li class="bg-light"><i class="bi bi-star-fill">Books</i></li>
				      		<li><i class="bi bi-star">Batteres</i></li>
				     	 </ul></td>
				      <td>
				      	<ul style="list-style: none;">
				      		<li class="bg-light">5.88</li>
				      		<li>150.99</li>
				      		<li class="bg-light">150</li>
				      		<li>14.12</li>
				      	</ul></td>
				      <td>320.99</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td colspan="2">Larry the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
		    </div>
		    <div class="col-lg-2 border">
		      <h4 class="mt-5 ms-5">File Info</h4>
		      <div class="row" style="font-size:12px;">
		      	<p>Company Name:</p>
		      	<p>Company Address:</p>
		      	<p>Company Phone Number:</p>
		      	<p>Dates</p>
		      	<label>Show Tax<input class="ms-2" type="checkbox" name="">
		      </div>
		      <div class="row mt-3">
		      	<h5>Total Amout</h5>
		      	<img src="img/preview.png">
		      </div>
		      <div class="d-flex ms-5 mt-3">
		      	<h6>Add a Remark</h6>
		      	<i class="bi bi-pencil-fill ms-1" ></i>
		      </div>
		    </div>
		<footer class="text-center text-lg-start border">
	  <!-- Copyright -->
	  <div class="text-center p-3">
	   CopyRight Repslips. All Rights Reserved	   
	  </div>
	  <!-- Copyright -->
	</footer>
	</div>
</body>
</html>