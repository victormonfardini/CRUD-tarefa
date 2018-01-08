<?php include("cabecalho.php"); ?>

<!-- multipart/form-data serve para o anexo de arquivo no formulario-->
<form class="criar-tarefa" enctype="multipart/form-data" action="adiciona-tarefa.php" method="post">
    <h1>Cadastro de tarefa</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Descriçao</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <tr>
            <td>Codigo</td>
            <td><input class="form-control" type="number" name="codigo"></td>  
        </tr>
        <tr>
            <td>Anexo</td>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
            <td><input class="form-control-file" name="arquivo" type="file"></td>
        </tr>

    </table>
<input class="btn btn-primary btn-lg" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"><br><br>
</form>

<?php include("rodape.php"); ?>
