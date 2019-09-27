<?php 
    header("Access-Control-Allow-Origin: *");
    echo "Olá, eu sou uma API";
    include("conexao.php");

    $MinhaConexao = new conexao();
    $MinhaConexao->conectar();
?>