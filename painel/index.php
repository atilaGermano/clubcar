<?php 
@session_start();
echo $_SESSION['nome'];
echo $_SESSION['id'];
echo $_SESSION['nivel'];
?>

<a href="logout.php">Sair</a>