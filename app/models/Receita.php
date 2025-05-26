<?php
class Receita {
    public $id;
    public $nome;
    public $categoria;
    public $descricao;

    public function __construct($id, $nome, $categoria, $descricao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
    }

    // Função para buscar todas as receitas
    public static function all($conn) {
        $sql = "SELECT * FROM receitas";
        $result = $conn->query($sql);
        $receitas = [];

        while ($row = $result->fetch_assoc()) {
            $receitas[] = new Receita($row['id'], $row['nome'], $row['categoria'], $row['descricao']);
        }

        return $receitas;
    }
}
?>