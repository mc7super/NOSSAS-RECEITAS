<!-- authController.php -->
<?php
namespace App\Controller;

require_once __DIR__ . '/../models/Usuario.php';

use App\Model\Usuario;

class AuthController {
    public function login($email, $senha) {
        $usuario = Usuario::findByEmail($email);
        if ($usuario && password_verify($senha, $usuario->senha_hash)) {
            // sucesso
        } else {
            // falha
        }
    }
}
