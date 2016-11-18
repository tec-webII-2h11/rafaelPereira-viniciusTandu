<?php
  include "conecta_mysql.php";

$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];

$resultado = mysqli_query($conexao, "UPDATE usuario SET usuario='$usuario WHERE senha='$pwd'") or die ("Não foi possivel executar a SQL:".mysqli_error($conexao));
if ($resultado== TRUE) {
	echo "Usuario alterado";
}else{
	echo "Erro na inserção"
}
mysql_close($conexao)

?>