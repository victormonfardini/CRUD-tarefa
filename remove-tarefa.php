<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-tarefa.php");

$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
//função removeTarefa que deleta dados do banco
removeTarefa($conexao, $id);


header("Location: tarefa-lista.php?removido=true");
die();


include("rodape.php");
?>