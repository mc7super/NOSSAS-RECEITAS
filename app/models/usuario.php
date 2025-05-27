<?php

class Usuario {
    public $id;
    public $email;
    public $senha_hash;
    public $id_funcionario; 
    public $cargo;

    public static function findByEmail($email, $pdo) {
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
}
