<?php
require_once '../models/Usuario.php';

class AuthController {

    public function login($username, $password, $conn) {
        $usuario = Usuario::findByUsername($username, $conn);

        if ($usuario && $usuario->password == $password) {
            return "Login bem-sucedido!";
        }

        return "Usuário ou senha incorretos.";
    }
}
?>
