<?php
include "conecta_mysql.php";
 $resultado = mysqli_query($conexao,"SELECT * from usuario") or die ("Não foi possivel retornar a SQ:".mysqli_error($conexao));
 	if ($resultado) {
 		while ($row= mysqli_fetch_array($resultado)) {
 			echo "Usuario: ".$row['usuario']."-"."Senha: ".$row['senha']."<br/>";
 		}
 	}
 	mysql_close($conexao)

?>