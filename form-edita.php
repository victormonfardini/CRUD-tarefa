<?php   include("cabecalho.php"); 
        include("conecta.php");
        include("banco-tarefa.php");

//declarando variavel id
$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
//chamando função buscaTarefa para buscar dados do banco

$tarefa = buscaTarefa($conexao, $id);


if (!is_object($tarefa)) {
    die('Cadastro não encontrado!'); # nem exibe o formulário...
}
?>

<form class="criar-tarefa" enctype="multipart/form-data" action="edita-tarefa.php" method="post">
    <h1>Editar tarefa</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$tarefa->nome?>" ></td>
        </tr>
        <tr>
            <td>Descriçao</td>
            <td><textarea class="form-control" name="descricao" ><?=$tarefa->descricao?></textarea></td>
        </tr>
        <tr>
            <td>Codigo</td>
            <td><input class="form-control" type="number" name="codigo" value="<?=$tarefa->codigo?>" ></td>  
        </tr>
        <tr>
            <td>Anexo</td>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
            <td><input class="form-control-file" name="arquivo" type="file" ></td>
        </tr>
    </table>
        <input type="hidden" name="id" value="<?=$tarefa->id?>">
        <button  class="btn btn-primary btn-lg" name="cadastrar">Salvar</button><br><br>
</form>

<?php include("rodape.php"); ?>