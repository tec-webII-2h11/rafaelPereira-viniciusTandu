<?php
include "cabeca.php";
?>
					<form action="crud.php" method="post">
						<input type="radio" name="tipoCRUD" value="C" checked>>Criar usuário<br>
						<input type="radio" name="tipoCRUD" value="D">Deletar usuário<br>
						<input type="radio" name="tipoCRUD" value="R">Ver todos usuários<br>
						<input type="submit" value="ativar">
					</form>
 <?php
                                                include "lateral.php"
?>