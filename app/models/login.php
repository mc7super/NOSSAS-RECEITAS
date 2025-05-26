<?php
session_start();
require 'conectabd.php';
require 'usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['senha'] ?? '';

    $usuario = Usuario::findByEmail($email, $pdo);

    if ($usuario && password_verify($password, $usuario->senha_hash)) {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_email'] = $usuario->email;
        header('Location: DashAdmin.php');
        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

<!-- Formulário HTML -->
<form method="POST" action="login.php">
    <input type="text" name="email" placeholder="E-mail" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>
