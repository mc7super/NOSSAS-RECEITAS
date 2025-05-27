<?php
require_once '../controllers/AuthController.php';

$authController = new AuthController();

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $authController->login($username, $password, $conn);
}
?>
