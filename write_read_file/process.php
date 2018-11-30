<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Meredith McNulty">
	<link rel="icon" href="favicon.ico">

		<title>LIS4381 - Write/Read File</title>
		<?php include_once("../css/include_css_data_tables.php"); ?>
</head>
<body>

<?php
// define variables and set to empty values
$comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php include_once("../global/nav.php"); ?>


<div class="container-fluid">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>
						<?php
						echo $comment;
						echo "<br><br><br>";
						?>
		<?php include_once "global/footer.php"; ?>
		</div>
</div> <!-- end table-responsive -->

</body>
</html>
