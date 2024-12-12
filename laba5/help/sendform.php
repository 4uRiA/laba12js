<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=gbuz;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$who = $_POST['who'];
		$problem = $_POST['problem'];

		$query = $connect->query("INSERT INTO gbuz.gbuzForm (name, email, phone, address, who, problem)
		VALUES ('$name', '$email', '$phone', '$address', '$who', '$problem')");
	}
	header('Location: ' . "../index.php");
	exit;
}
?>