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
	<title>Too High!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css.php">

</head>
<body>
	<div class="container">
		<h1>Welecome to the Great Number Game!</h1>
		<h3>I'm thinking of a number between 1 and 100</h3>
		
		<div class="box high">
			<h1>Too High!</h1>
			<h4>Number of Guesses: <?php echo $_SESSION['count'] ?></h4>
		</div>

		<h3>Try Again Buddy!</h3>

		<form action="process.php" method="post">
			<input type="number" name="number">
			<button type="submit">Submit</button>
		</form>

		<p>Give up?</p>
		<form action="reset.php">
				<button>Reset Number</button>
		</form>
	</div>
</body>
</html>