<?php 
    include("conecta.php");
    include("banco-login.php");
    
    //declarando variaveis
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
      //Verifica se a variavel $login e $senha estão vazias ou nulas
      if(empty($login && $senha)){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login e/ou senha deve ser preenchido');window.location.href='form-cadastro.php';</script>";

        }else{
          //chama a função verificaLogin e compara com a variavel $login para ver se já existe
          if(verificaLogin($conexao,$login) == $login){
            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='form-cadastro.php';</script>";
            die();

          }else{
            //chama a função insereLoginSenha que recebe as variaveis $conexao, $login, $senha e insere no banco
            if(insereLoginSenha($conexao,$login,$senha)){
              echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='form-cadastro.php'</script>";
            }
          }
        }
?>