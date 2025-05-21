<?php
session_start();
require 'conexao.php';    // arquivo com sua conexão MySQL
require 'Usuario.php';    // classe acima

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuario = Usuario::findByUsername($username, $conn);

    if ($usuario && $usuario->password === $password) {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_email'] = $usuario->email;
        $_SESSION['usuario_username'] = $usuario->username;

        header('Location: DashAdmin.php');
        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

<!-- Formulário HTML -->
<form method="POST" action="login.php">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>