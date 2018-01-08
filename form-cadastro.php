<?php include("cabecalho-login.php");
?>
<form class="login-cadastro" method="post" action="cadastro.php">
<h1>Cadastro de usuários</h1>
<label>Login :</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
<input class="btn btn-primary" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    
<?php include("rodape.php")
?>