<?php   include("cabecalho.php");
        include("conecta.php");
        include("banco-tarefa.php");

//declarando variaveis
$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$codigo = filter_input(INPUT_POST, 'codigo');

//isset verifica se uma variavel existe e empty verifica se uma variavel está vazia
if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['name'])){
    
    //substr -> Retorna a parte de string 
    //pegando a extensão do arquivo
    $extensao = substr($_FILES['arquivo']['name'], -4);
    //md5() -> calcula o hash MD5 de uma string
    //time() -> retorna a hora atual em segundos
    $novo_nome = md5(time()).$extensao;
    $diretorio = "upload/";
    
    //move_uploaded_file() -> Move um arquivo enviado para uma nova localização
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    
    //chama função insereTarefa
    if(insereTarefa($conexao,$nome,$descricao,$codigo,$novo_nome)){
        echo"<script language='javascript' type='text/javascript'>alert('Tarefa criada com sucesso!');window.location.href='home.php';</script>";
        die();
    } else {
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível criar a tarefa!');window.location.href='form-tarefa.php';</script>";
        die();
    }  
}else{
    echo"<script language='javascript' type='text/javascript'>alert('Falha ao enviar arquivo em anexo!');window.location.href='form-tarefa.php';</script>";
        die();  
}
?>

<?php include("rodape.php"); ?>