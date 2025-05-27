<!-- usuario.php -->
<?php

class Usuario {
    public $id;
    public $email;
    public $senha_hash;
    public $id_funcionario; 
    public $cargo;

    public static function findByEmail($email, $pdo) {
        $sql = "SELECT u.id, u.email, u.senha_hash, f.id AS id_funcionario, c.nome AS cargo
                FROM usuario u
                JOIN funcionario f ON f.id = u.id_funcionario
                JOIN cargo c ON c.id = f.id_cargo
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
