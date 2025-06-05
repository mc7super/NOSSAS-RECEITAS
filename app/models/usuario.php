<?php
namespace App\Model;

require_once __DIR__ . '/../config/database.php';

use PDO;

class Usuario {
    public $id;
    public $email;
    public $senha_hash;
    public $id_funcionario;
    public $cargo;

    public static function findByEmail($email) {
        $pdo = \Database::conectar();

        $sql = "SELECT u.id_Usuario AS id, u.email, u.senha_hash, f.id_funcionario AS id_funcionario, c.descricao AS cargo
                FROM Usuario u
                JOIN funcionarios f ON f.id_funcionario = u.funcionario_id
                JOIN Cargo c ON c.id_Cargo = f.id_cargo
                WHERE u.email = :email
                LIMIT 1";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($dados) {
            $usuario = new Usuario();
            $usuario->id = $dados['id'];
            $usuario->email = $dados['email'];
            $usuario->senha_hash = $dados['senha_hash'];
            $usuario->id_funcionario = $dados['id_funcionario'];
            $usuario->cargo = $dados['cargo'];
            return $usuario;
        }

        return null;
    }

    public static function salvar($nome, $email) {
        $pdo = \Database::conectar();
        $sql = "INSERT INTO Usuario (nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['nome' => $nome, 'email' => $email]);
    }

    public static function listar() {
        $pdo = \Database::conectar();
        $sql = "SELECT * FROM Usuario";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}