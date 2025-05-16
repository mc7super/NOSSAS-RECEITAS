<?php
class Usuario {
    public $id;
    public $username;
    public $password;
    public $email;

    public function __construct($id, $username, $password, $email) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    // Função para buscar um usuário no banco
    public static function findByUsername($username, $conn) {
        $sql = "SELECT * FROM usuarios WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Usuario($row['id'], $row['username'], $row['password'], $row['email']);
        }

        return null;
    }
}
?>