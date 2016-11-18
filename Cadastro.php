<?php
include "cabeca.php";
    ?>
                                    <header id="topo"><h2 id="pbaixo">Conte-nos suas aventuras</h2></header>
                                        <form id="forml" method="post" action="create.php">
                                            <label for="usu">Usuário:</label><input type="text" name="usuario">
                                            <br><br>
                                            <label for="senha">Senha:</label><input type="password" name="pwd" id="senha">
                                            <br><br>
                                            <input type="submit" value="Cadastrar">
                                            <br>
                                            <br>
                                        </form>
                                        <?php
                                                include "lateral.php"
?>