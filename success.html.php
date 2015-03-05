<?php 
session_start();

if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 1;
} else {
	$_SESSION['count'] = $_SESSION['count'] +1;
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Success!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="container">
		<h1>Welecome to the Great Number Game!</h1>
		<h3>I'm thinking of a number between 1 and 100</h3>
		<h3>Good Job!!</h3>

		<div class="box success">
			<h1>
				<?php echo $_SESSION['number']; ?> 
				was the number!
				
				<h4>Number of Guesses: <?php echo $_SESSION['count'] ?></h4>
			</h1>
			<form action="reset.php">
				<button>Play Again!</button>
			</form>
		</div>
	</div>
</body>
</html>