<?php
    //função para verificar se login e senha está conforme foi cadastrado
    function verificaLoginSenha ($conexao,$login,$senha){
        $verifica = ("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        return mysqli_query($conexao,$verifica);
    }

    //função ára verificar se o login ja está cadastrado
    function verificaLogin ($conexao,$login){
        $query = "SELECT login FROM usuarios WHERE login = '$login'";
        $select = mysqli_query($conexao,$query);
        $array = mysqli_fetch_array($select);
        $logarray = $array['login'];
        return $logarray;
    }
    
    //função para cadastrar novo usuario e inserir login e senha no banco 
    function insereLoginSenha ($conexao, $login, $senha){
        $insert = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        return mysqli_query($conexao,$insert);
    }