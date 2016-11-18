<?php
	$opcao =$_POST['tipoCRUD'];
	switch ($opcao) {
		case 'C':
			$formulario= "<h3> CRIAR</h3>
			<form action='create.php' method='POST'>
			 Usuario:<input type='text' name='usuario'><br>
			 Senha:<input type='text' name='pwd'><br>
			 <input type='submit' value='INSERIR'>
			 </form>";
			break;

		case 'R':
				$formulario="<h3> LER</h3>
			<form action='read.php' method='POST'>
			 <input type='submit' value='BUSCAR'>
			 </form>";
				break;
		case 'U':
			"<h3>ATUALIZAR</h3>
			<form action='update.php' method='POST'>
			 Usuario:<input type='text' name='usuario'><br>
			 Senha:<input type='text' name='pwd'><br>
			 <input type='submit' value='ATUALIZAR'>
			 </form>";			
			 	break;
		case 'D':
			"<h3> DELETAR</h3>
			<form action='delete.php' method='POST'>
			 Usuario:<input type='text' name='usuario'><br>
			 <input type='submit' value='REMOVER'>
			 </form>";
			break;
			
	}
				echo "$formulario";
				?>