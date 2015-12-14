<?php
session_start();
unset($_SESSION['logged-in']);
unset($_SESSION['email']);
header("location: m7ex5.php");