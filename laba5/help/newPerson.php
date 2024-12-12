<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=gbuz;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$job = $_POST['job'];
		$address = $_POST['address'];

		$query = $connect->query("INSERT INTO gbuz.gbuzJob (name, phone, job, address)
		VALUES ('$name', '$phone', '$job', '$address')");
	}
	header('Location: ' . "../admin/indexadmin.php");
	exit;
}
?>