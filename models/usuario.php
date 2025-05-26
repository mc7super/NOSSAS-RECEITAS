<?php
class Usuario {
    public $id;
    public $email;
    public $senha_hash;
    public $ativo;

    public static function findByEmail($email, $pdo) {
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND ativo = 1 LIMIT 1");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $usuario = new Usuario();
            $usuario->id = $row['id_Usuario'];
            $usuario->email = $row['email'];
            $usuario->senha_hash = $row['senha_hash'];
            $usuario->ativo = $row['ativo'];
            return $usuario;
        }

        return null;
    }
}
?>
