<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-tarefa.php"); ?>

<!-- array_key_exists -> checa se uma chave ou indice existe-->
<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Tarefa apagada com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">

    <?php
        //chama função listaTarefas
        $tarefas = listaTarefas($conexao);
    ?>
    <tr class="titulo-lista">
        <td><b>Nome</b></td>
        <td><b>Descrição</b></td>
        <td><b>Código</b></td>
        <td><b>Anexo</b></td>
        <td></td>
        <td></td>
    </tr>
    <?php
        foreach($tarefas as $tarefa) :
    ?>
    <tr>
        <td><?= $tarefa['nome'] ?></td>
        <!--substr -> Retorna a parte de string -->
        <td><?= substr($tarefa['descricao'],0,40)?></td>
        <td><?= $tarefa['codigo'] ?></td>
        
        <td><a href="download-anexo.php?file=<?= $tarefa['arquivo'] ?>"><?=  $tarefa['arquivo'] ?></a></td>
        <td>
            <form action="form-edita.php" method="post"> 
                <input type="hidden" name="id" value="<?=$tarefa['id']?>">
                <button class="btn btn-info">editar</button>
            </form>
        </td>
        <td>
            <form action="remove-tarefa.php" method="post"> 
                <input type="hidden" name="id" value="<?=$tarefa['id']?>">
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>   
</table>

<?php include("rodape.php"); ?>
