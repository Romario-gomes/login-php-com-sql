<?php
session_start();
?>
<html>
    <head>
        <title>Login Interface</title>
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css"/>
    </head>  
    <body>
        <div id="container">
            <header>
                <figure class="image">
                    <img src="assets/Imagens/Logo.png" class="image-login" alt="Logo">
                </figure>
            </header>

            <?php
                if(isset($_SESSION['usuario_existe'])){
            ?>
                <div class="ususuario_existe">
                    <h4>Erro: usuario já existente!</h4>
                </div>
            <?php  
            }
                unset($_SESSION['usuario_existe']);
            ?>

            <div class="box-login">
                <form action="salva-dados.php" method="POST">         
                    <h1>Cadastro</h1>
                    <br>
                    <input type="text" class="input-text" name="nome-cadastro" placeholder="Nome" required>
                    <br>
                     <br>
                     <input type="text" class="input-text" name="sobrenome-cadastro" placeholder="Sobrenome" required>
                    <br>
                     <br>
                     <input type="text" class="input-text" name="usuario-cadastro" placeholder="Usuario" required>
                    <br>
                     <br>
                     <input type="text" class="input-text" name="email-cadastro" placeholder="Email" required>
                    <br>
                     <br>
                    <input type="text" class="input-text" name="senha-cadastro" placeholder="Senha" required>
                    <br>
                    <br>
                    <input type="submit" class="input-button" name="btn-cadastro" value="Cadastrar" required> 
                    <a href="Index.php" class="margin-cadastro">Entrar</a>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>