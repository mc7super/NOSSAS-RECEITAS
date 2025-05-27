<!-- gerar_hash.php -->
<?php
$senha = 'admin'; // sua senha desejada
echo password_hash($senha, PASSWORD_DEFAULT);
?>
