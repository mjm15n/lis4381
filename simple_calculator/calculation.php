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
				<form name="form" id="defaultForm" method="post" class="form-horizontal" action="calculation.php">
					<div class="form-group">
							<label class="col-sm-4 control-label">Num 1:</label>
							<div class="col-sm-4">
									<input type="number" class="form-control" name="v1" />
							</div>
					</div>

					<div class="form-group">
							<label class="col-sm-4 control-label">Num 2:</label>
							<div class="col-sm-4">
									<input type="number" class="form-control" name="v2" />
							</div>
					</div>
			<input type="radio" name="add"> Addition
			<input type="radio" name="sub"> Subtraction
			<input type="radio" name="mul"> Multiplication
			<input type="radio" name="div">	Division
			<br>
			<br>
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
						<button type="submit" class="btn btn-primary" name="calculate" value="Calculate" onclick="math();">Calculate</button>
				</div>
			</div>
		</form>
		<div>
			<?php include_once "global/footer.php"; ?>
		</div> <!-- end starter-template -->
 </div> <!-- end container -->
	

<!-- Bootstrap JavaScript
================================================== -->
<!-- Placed at end of document so pages load faster -->
		<?php include_once("../js/include_js.php"); ?>
<script>
function math()
{
if (document.form.add.checked == true)
	{
	var num1=document.form.v1.value;
	var num2=document.form.v2.value;
	var num3=Number(num1)+Number(num2);
	alert(num1 +" + "+num2+" = "+num3);
	}

	else if(document.form.sub.checked == true)
	{
	var num1=document.form.v1.value;
	var num2=document.form.v2.value;
	var num3=Number(num1)-Number(num2);
	alert(num1 +" - "+num2+" = "+num3);
	}

	else if(document.form.mul.checked == true)
	{
	var num1=document.form.v1.value;
	var num2=document.form.v2.value;
	var num3=Number(num1)*Number(num2);
	alert(num1 +" * "+num2+" = "+num3);
	}

	else if(document.form.div.checked == true)
	{
	var num1=document.form.v1.value;
	var num2=document.form.v2.value;
	var num3=Number(num1)/Number(num2);
	alert(num1 +" / "+num2+" = "+num3);
	}

	}
</script>
</body>
</html>
