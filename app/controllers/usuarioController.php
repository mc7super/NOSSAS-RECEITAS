<?php
namespace App\Controller;

require_once __DIR__ . '/../models/Usuario.php';

use App\Model\Usuario;

class UsuarioController
{
    public function salvar($dados)
    {
        $nome = $dados['nome'] ?? '';
        $email = $dados['email'] ?? '';

        if (!empty($nome) && !empty($email)) {
            // Criar método salvar no Model se não existir
            Usuario::salvar($nome, $email);
            header("Location: ../views/login.php?rota=lista");
            exit;
        } else {
            echo "Nome e e-mail são obrigatórios.";
        }
    }

    public function listar()
    {
        return Usuario::listar();
    }
}
