<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-teste';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


// if($conexao->connect_errno)
// {
//     echo "Erro";
// }else{
//     echo "Conexão Efetuada com sucesso";
// }
?>
