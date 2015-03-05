<?php 
	session_start();

	if (!isset($_SESSION['number'])) {
		$_SESSION['number'] = rand(1,100);
	}
	// echo $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Great Number Game</title>
	<meta charset="UTF-8">
	<meta name="description" content="A fun number game created with PHP">
	<meta name="author" content="Elliott Hindman">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="container">
		<h1>Welecome to the Great Number Game!</h1>
		<h3>I'm thinking of a number between 1 and 100</h3>
		<h3>Take a Guess!</h3>
		
		<form action="process.php" method="post">
			<input type="number" name="number">
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>