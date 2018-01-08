<?php
  include("conecta.php");
  include("banco-login.php");

//declaração das variaveis 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  
    //Verifica se a variável $_POST['entrar'] existe
    if (isset($entrar)) {
          //mysqli_num_rows retorna o numero de linhas
          //chama função verificaLoginSenha que verifica se as informações estão corretas 
          if (mysqli_num_rows(verificaLoginSenha($conexao,$login,$senha))<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }else{
          //Define a variavel $login como cookie para ser enviado junto com os cabeçalhos
          setcookie("login",$login);
          header("Location:home.php");
        }
    }
?>