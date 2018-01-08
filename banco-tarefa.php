<?php
    
    function insereTarefa ($conexao,$nome,$descricao,$codigo,$novo_nome){
        $insert = "INSERT INTO tarefa (nome,descricao,codigo,arquivo) VALUES ('$nome','$descricao','$codigo','$novo_nome')";
        return mysqli_query($conexao,$insert);
    }

    function listaTarefas($conexao) {
        $tarefas = array();
        $resultado = mysqli_query($conexao, "select * from tarefa");

        while($tarefa = mysqli_fetch_assoc($resultado)) {
            array_push($tarefas, $tarefa);
        }

        return $tarefas;
    }

    function removeTarefa ($conexao, $id){
        $query = "delete from tarefa where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaTarefa ($conexao,$id){
        $query = "select * from tarefa where id = {$id}";
        $result = mysqli_query($conexao,$query);
        //mysqli_fetch_object - > Retorna a linha atual do conjunto de resultados (objeto)
        return mysqli_fetch_object($result);
    }

    function alteraTarefa ($conexao,$nome,$descricao,$codigo,$novo_nome,$id){
        $update = "UPDATE tarefa SET nome = '$nome',descricao = '$descricao',codigo = '$codigo',arquivo = '$novo_nome' where id = {$id}";
        return mysqli_query($conexao,$update);
    }