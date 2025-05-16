<?php
    $host = 'localhost';
    $dbname = 'nossa_receita';
    $user = 'admin';
    $password = '';

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    echo "Conexão bem-sucedida!";
?>