<?php 
require_once("conexao.php");
$query = $pdo->query("select* from usuarios");
$res = $query->fetchALL(PDO::FETCH_ASSOC);//método que recupera todas a linhas do bd
$linhas = count($res);
$senha = '123';
$senha_crip = md5($senha) ;
if($linhas == 0){
    $query = $pdo->query("insert into usuarios set nome = '$nome_sistema', 
    email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip',
    nivel = 'Administrador', ativo = 'Sim', foto = 'sem-foto.jpg' ");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ClubCar</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logtitle.png">
</head>
<body>
    <div class="login">
        
        <div class="form">
            <form method="post" action="autenticar.php">
            <img src="img/logo.png" class="imagem">
                <input type="email" name="usuario" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">
                <button>Login</button>
            </form>

        </div>

    </div>
</body>
</html>