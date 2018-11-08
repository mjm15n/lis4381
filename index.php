<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Meredith McNulty">
	<link rel="icon" href="favicon.ico">

	<title>My Online Portfolio</title>

		<?php include_once("css/include_css.php"); ?>	

<!-- Carousel styles -->
<style type="text/css">
h2
{
	margin: 0;     
	color: #666;
	padding-top: 50px;
	font-size: 52px;
	font-family: "trebuchet ms", sans-serif;    
}
.item
{
	background: #333;    
	text-align: center;
	height: 300px !important;
}
.carousel
{
  margin: 20px 0px 20px 0px;
}
.bs-example
{
  margin: 20px;
}
</style>

</head>
<body>

	<?php include_once("global/nav_global.php"); ?>
	
	<div class="container">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>
		
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/slide1.png" alt="Chania">
          <div class="carousel-caption">
            <h3>Cup of Java</h3>
            <p>Brewing Apps in Android Studio</p>
          </div>
        </div>

        <div class="item">
          <img src="images/slide2.png" alt="Chicago">
          <div class="carousel-caption">
            <h3>Effective Interface & UX Design</h3>
            <p>Buiding Mobile Web Applications</p>
          </div>
        </div>

        <div class="item">
          <img src="images/slide3.png" alt="New York">
          <div class="carousel-caption">
            <h3>Best Practices in Prototyping</h3>
            <p>Using Data Repositories to Build Dynamic Products</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
<!-- End Bootstrap Carousel  -->
						
<?php
include_once "global/footer.php";
?>

	</div> <!-- end starter-template -->
</div> <!-- end container -->

		<?php include_once("js/include_js.php"); ?>	
	
</body>
</html>
