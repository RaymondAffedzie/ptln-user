<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['users']);
    header('Location: index.php');
}
