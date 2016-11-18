<?php
include "conecta_mysql.php";

$usuario = $_POST['usuario'];

$resultado=mysqli_query($conexao,"DELETE FROM usuario WHERE usuario='$usuario'") OR die("Não foi possivel executar a SQL: ".mysql_error($conexao));
if ($resultado==TRUE) {
	echo "Usuario removido";
}else{
	echo "<br/>Erro na remoção";
}
mysql_close($conexao);
?>