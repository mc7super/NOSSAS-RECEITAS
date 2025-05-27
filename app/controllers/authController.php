<?php
require_once '../models/Usuario.php';

class AuthController
{

    public function login($username, $password, $conn)
    {
        $usuario = Usuario::findByEmail($username, $conn);

        if ($usuario && password_verify($password, $usuario->senha_hash)) {
            return "Login bem-sucedido!";
        }

        return "Usuário ou senha incorretos.";
    }
}
?>