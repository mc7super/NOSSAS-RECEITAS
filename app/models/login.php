<?php
session_start();
require '../config/database.php';
require 'usuario.php';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['senha'] ?? '';

    $usuario = Usuario::findByEmail($email, $pdo);

    if ($usuario && password_verify($password, $usuario->senha_hash)) {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_email'] = $usuario->email;
        $_SESSION["id_funcionario"] = $usuario->id_funcionario;
        $_SESSION["cargo"] = $usuario->cargo;                   

        // Redirecionamento por cargo
        switch ($_SESSION["cargo"]) {
            case 'Administrador':
                header("Location: admin/dashboard_admin.php");
                break;
            case 'Cozinheiro':
                header("Location: cozinheiro/dashboard_cozinheiro.php");
                break;
            case 'Degustador':
                header("Location: degustador/dashboard_degustador.php");
                break;
            case 'Editor':
                header("Location: editor/dashboard_editor.php");
                break;
            default:
                echo "Cargo desconhecido.";
                exit();
        }

        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>