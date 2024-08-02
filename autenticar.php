<?php
@session_start(); 
require_once("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->prepare("select* from usuarios where email = :email
  and senha_crip = :senha");
$query->bindValue(":email", "$usuario");
$query->bindValue(":senha", "$senha_crip");
$query->execute();
$res = $query->fetchALL(PDO::FETCH_ASSOC);//método que recupera todas a linhas do bd
$linhas = count($res);

if ($linhas > 0){
   $_SESSION['nome'] = $res[0]['nome'];
   $_SESSION['id'] = $res[0]['id'];
   $_SESSION['nivel'] = $res[0]['nivel'];
    echo '<script>window.location="painel"</script>';
}else{
    echo '<script>window.alert("Dados Incorretos!")</script>';
    echo '<script>window.location="index.php"</script>';
}
?>