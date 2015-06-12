<?php
include "cabecalho.php";
?>

<?php
require "includes/validacao.php";
include "dao/AdminDAO.php";

echo "Bem vindo " . $_SESSION["nome"] . " seu Session ID é " . $_SESSION["id"] .
 " e você logou em " . $_SESSION["datahora"];


$acoes = new AdminDAO();

echo "<h1>Visualizar todos os registros</h1>";
$acoes->visualizar();

echo "<h1>Visualizar apenas registro específico</h1>";
$acoes->visualizar(1);
?>

<a href="formadmin.php">Cadastrar novo Administrador</a> | <a href="logout.php">Sair</a>

<?php
include "rodape.php";
?>