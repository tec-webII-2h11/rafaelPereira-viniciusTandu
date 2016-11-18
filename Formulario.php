<?php
include "cabeca.php";
    ?>
                                    <header id="topo"><h2 id="pbaixo">Conte-nos suas aventuras</h2></header>
                                        <?php
if( isset($_COOKIE['validaCookie']) ) $usuario = $_COOKIE['usuario'];
			else $usuario = "";
			if( isset($_COOKIE['validaCookie']) ) $senha = $_COOKIE['senha'];
			else $senha = "";
?>
                                         <form id="forml" method="POST" action="create.php">
                                            <label for id="Usuário"></label>
                                            Usuário:<input type="text" name="Usuário">
                                            <br><br>
                                            <label for id="pwd"></label>
                                            Senha:<input type="password" name="pwd">
                                            <br><br>
                                            <label for id="logar"></label>
                                            <input type="submit" name="logar" value="Logar">
                                            Salvar dados:<input type="checkbox" value="validaCookie">
                                             <br><br>
                                            <p>Como foi sua experiência?</p>
                                            <textarea rows="10" cols="100" placeholder="Deixe sua experiência" >
                                            </textarea>
                                            <br>
                                            <br>
                                            <input type="submit" value="Enviar">
                                        
                                        </form>
                                        </article>
                                            <?php
                                                include "lateral.php"
?>
                                                    