<!-- gerar_hash.php -->
<?php
$senha = 'admin123'; // sua senha desejada
echo password_hash($senha, PASSWORD_DEFAULT);
?>
