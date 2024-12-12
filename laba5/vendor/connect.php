<?php
session_start();

if ($_SESSION['user']) {
} else {
	header('Location: ../help/autorize.php');
}

?>
<?php

$connect = mysqli_connect('localhost', 'root', '', 'gbuz');

if (!$connect) {
	die('Error connect to DataBase');
}