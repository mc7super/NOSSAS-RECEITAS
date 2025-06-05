<?php
require_once(__DIR__ . '/../models/usuario.php');

class UsuarioController
{
    public function salvar($dados)
    {
        $nome = $dados['nome'] ?? '';
        $email = $dados['email'] ?? '';

        if (!empty($nome) && !empty($email)) {
            Usuario::salvar($nome, $email);
            header("Location: ../public/index.php?rota=lista");
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
