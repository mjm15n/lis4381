<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Meredith McNulty">
	<link rel="icon" href="favicon.ico">
	<title>LIS4381 - Simple Calculator</title>
		<?php include_once("../css/include_css.php"); ?>
</head>
<body>
	<?php include_once("../global/nav.php"); ?>
	<div class="container">
		<div class="starter-template">
			<div class="page-header">
				<?php include_once("global/header.php"); ?>	
			</div>

			<h2>Perform Calculation</h2>
			<form id="defaultForm" method="post" class="form-horizontal" action=>
				<div class="form-group">
					<label class="col-sm-4 control-label">Num 1:</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="num1" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Num 2:</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="num2" />
					</div>
				</div>

				<div class="form-group">
					<input type="radio" value= "Addition" name="calcu"> Addition
					<input type="radio" value= "Subtraction" name="calcu"> Subtraction
					<input type="radio" value= "Multiplication" name="calcu"> Multiplication
					<input type="radio" value= "Division" name="calcu"> Division
					<input type="radio" value= "Exponentiation" name="calcu"> Exponentiation
				</div>

				<div class="form-group">
					<div class="col-sm-6 col-sm-offset-3">
							<button type="submit" class="btn btn-primary" name="submit" value="submit">Calculate</button>
							<input type="hidden" name="redirect" value="http://localhost/repos/lis4381/simple_calculator/include.php">
					</div>
				</div>
			</form>
			<?php include_once "include.php"; ?>
			<?php include_once "global/footer.php"; ?>
		</div> <!-- end starter-template -->
	</div> <!-- end container -->
	<?php include_once("../js/include_js.php"); ?>
</body>
</html>
