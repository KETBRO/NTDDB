<?php 
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
		 .card-img-top {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: auto;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container ">
	<h3> Teams </h3>
        <div class="row mt-5 justify-content-md-center">
					<div class="col-md-5 text-center">
		<div class="card text-center">
		  <img src="data/dranilkumar.png" class="rounded-circle card-img-top" alt="Developer 1">
		  <div class="card-body">
			<h4 class="card-title">Dr. Anil Kumar</h4>
			<h5 class="card-title">Assistant Professor</h5>
			<p class="card-text"> Department of Bioinformatics,<br> Central University of South Bihar,<br> Gaya, Bihar India (824236) <br> Email Id : kumaranil@cub.ac.in <br> Mobile: <br> <a href="https://scholar.google.co.in/citations?user=amyORNQAAAAJ&hl=en" target="_blank" class="card-link"> Google Scholar</a></p>
		  </div>
		  <div class="card-body">
			<a href="https://www.cusb.ac.in/dr-anil-kumar/" target="_blank" class="card-link"> More Info...</a>
		  </div>
		</div>
		</div>
			<div class="col-md-5 text-center">
		<div class="card">
		  <img src="data/prafulla.jpg" class="rounded-circle card-img-top" alt="Developer 2">
		  <div class="card-body">
			<h4 class="card-title">Praffulla Kumar</h4>
			<h5 class="card-title">Research Scholar</h5>
			<p class="card-text"> Department of Bioinformatics,<br> Central University of South Bihar,<br> Gaya, Bihar India (824236) <br> Email Id : praffullaarya@cusb.ac.in <br> Mobile: +91 7979031632<br> <a href="https://scholar.google.com/citations?user=Uuum5bAAAAAJ&hl=en&oi=ao" target="_blank" class="card-link"> Google Scholar</a></p>
		  </div>
		  <div class="card-body">
			<a href="https://scholar.google.com/citations?user=Uuum5bAAAAAJ&hl=en&oi=ao" target="_blank" class="card-link"> More Info...</a>
		  </div>
		</div>
		</div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php include "fotter.php" ?>