<?php 
	session_start();

	$userGuess = $_POST['number'];
	$greatNum = $_SESSION['number'];

	if ($userGuess > $greatNum) {
		header('Location: high.html.php');
		die();
	}
	if ($userGuess < $greatNum) {
		header('Location: low.html.php');
		die();
	} else {
		header('Location: success.html.php');
		die();
	}
?>