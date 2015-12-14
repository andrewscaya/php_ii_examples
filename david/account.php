<?php
session_start(); 

if (isset($_POST)) {
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $_POST['email'];
	echo "Your email is: " . $_SESSION['email'];
}