<?php
    $host = 'localhost';
    $dbname = 'nossa_receita';
    $user = 'root';
    $password = '';


    $conexao = new mysqli($host,$user, $password,$dbname) or die(mysqli_error($conexao));
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    echo "Conexão bem-sucedida!";
?>