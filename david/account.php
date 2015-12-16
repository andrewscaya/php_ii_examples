<?php
session_start();

if (isset($_POST)) {
    $_SESSION['logged-in'] = true;
    $_SESSION['email'] = strip_tags($_POST['email']);
    echo "Your email is: " . htmlspecialchars($_SESSION['email']);
}
