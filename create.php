<?php
include "conecta_mysql.php";

$pwd = sha1($_POST['pwd']);
$usuario = $_POST['usuario'];

$resultado = mysqli_query($conexao,"INSERT INTO usuario(pwd,usuario)
	VALUES('".$pwd."','".$usuario."')") or die ("Não foi possivel executar a SQL".mysqli_error($conexao));
	if ($resultado==TRUE){
		echo "<br/>Usuario inserido com sucesso";
   if( isset($_COOKIE['validaCookie']) ) $usuario = $_COOKIE['usuario'];
			else $usuario = "";
			if( isset($_COOKIE['validaCookie']) ) $senha = $_COOKIE['senha'];
			else $senha = "";
	}else{
		echo "<br/>erro na inserção";
	}
	mysqli_close($conexao)
	?>