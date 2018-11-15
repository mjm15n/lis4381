<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Meredith McNulty">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Project1</title>		
		<?php include_once("../css/include_css.php"); ?>			
  </head>

  <body>

		<?php include_once("../global/nav.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>
				<p class="text-left">
					<strong>Description:</strong>
					<ol class="text-left">
						<li>Create a launcher icon image and display it in both activities (screens)</li>
						<li>Must add background color(s) to both activities</li>
						<li>Must add border around image and button</li>
						<li>Must add text shadow (button)</li>
					</ol>
				</p>

				<h4>App Running Screen 1 Screenshot</h4>
				<img src="img/app1.png" class="img-responsive center-block" alt="App Running Screen 1 Screenshot" style="max-width: 400px">

				<h4>App Running Screen 2 Screenshot</h4>
				<img src="img/app2.png" class="img-responsive center-block" alt="App Running Screen 2 Screenshot" style="max-width: 400px">

				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
