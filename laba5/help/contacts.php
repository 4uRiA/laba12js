<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=gbuz;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$female = $_POST['female'];
		$question = $_POST['question'];
		$questinfo = $_POST['questinfo'];

		$query = $connect->query("INSERT INTO gbuz.gbuzCont (name, female, question, questinfo)
		VALUES ('$name', '$female', '$question', '$questinfo')");
	}
	header('Location: ' . "../contacts.php");
	exit;
}
?>