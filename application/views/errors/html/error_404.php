<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>404 Page Not Found</title>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<style type="text/css">


body {
	background-color: #f7f1f1;
	overflow-x:hidden; 
}

.img-background{
	background-image: url("/assets/img/Homer.png");
	width: 600px;
	height: 600px;
	margin-top: -80px;
	margin-left: -166px;
}

.img-404{
	background-image: url("/assets/img/404.png");
	background-repeat: no-repeat;
	width: 300px;
	height: 200px; 
	margin-top: 75px;
    margin-left: 104px; 
}

.not-found{
	font-size: 72px;
    font-weight: bold;
    color: #040404;
    margin-left: 48px;
}

@media (max-width: 1200px){
	.not-found{
		font-size: 60px;
		 margin-left: 70px;
	}
}

@media (max-width: 991px){

	.img-background{
		background-repeat: no-repeat;
	    margin-top: -80px;
	    margin-left: -206px;
	    background-size: 899px;
	}

	.img-404{
	    margin-left: 2px;
	}

	.not-found{
		font-size: 46px;
    	margin-left: 24px;
	}
}

@media (max-width: 767px){

	.img-background {
	    background-size: 690px;
	    margin: -80px auto;
	}

	.img-404{
	    margin: 0px auto;
	    background-size: 250px;
	    margin-top: -165px;
	}

	.not-found{

		font-size: 39px;
	    margin: -66px 30%;
	}
}

@media (max-width: 425px){

	.img-404{
		margin-top: -143px;
    	margin-left: 42%;
	}

	.not-found {
	    font-size: 32px;
	    text-align: center;
	    width: 323px;
	}
}

</style>
</head>
<body>
	<div class ="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="img-background"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="img-404"></div>
				<p class="not-found">NOT FOUND</p>
			</div>
		</div>

	</div>
</body>
</html>