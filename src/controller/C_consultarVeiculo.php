<?php
#Controlador responsável por buscar as informações de veículos
include_once("../persistence/conexao.php");
include_once("../persistence/veiculoDAO.php");

$codigo = $_POST['codigo'];

$conexao = new Connection();
$conexao->conectar();

$veiculodao = new veiculoDao();
$veiculodao->consultar($codigo, $conexao->getLink());

$conexao->fechar();
?>
