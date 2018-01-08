<?php include("cabecalho-login.php");
?>
<form class="login-cadastro" method="post" action="login.php">
<h1>Login</h1>
<label>Login :</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
<input class="btn btn-primary" type="submit" value="entrar" id="entrar" name="entrar"><br><br>
<a href="form-cadastro.php">Cadastre-se</a>
</form>    
<?php include("rodape.php")
?>