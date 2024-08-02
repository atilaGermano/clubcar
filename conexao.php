<?php 
date_default_timezone_set('America/Sao_Paulo');//define o fuso horário

$servidor = 'localhost';
$banco = 'clubcar';
$usuario = 'root';
$senha = '';

try{
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch(Exception $e){
    echo 'Erro ao conectar com o banco de dados.';
    echo $e;
}

//variaveis globais

$nome_sistema = 'Club Car';
$email_sistema = 'atilagermano@hotmail.com';

?>