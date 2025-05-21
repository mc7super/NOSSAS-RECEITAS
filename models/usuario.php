<?php
class Usuario {
    public $id;
    public $username;
    public $password;
    public $email;

    public function __construct($id, $email, $senha_hash) {
        $this->id = $id;
        $this->email = $email;
        $this->senha_hash = $senha_hash;
    }

    // Função para buscar um usuário no banco
    public static function findByUsername($username, $conn) {
        $sql = "SELECT * FROM usuarios WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Usuario($row['id'], $row['email'], $row['senha_hash']);
        }

        return null;
    }
}
?>