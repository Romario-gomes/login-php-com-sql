<?php
    session_start();
?>
<html>
    <head>
        <title>Login Interface</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/page-login.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:
        wght@100;300;400&display=swap" rel="stylesheet">

    </head>
    
    <body>
    <header>
        <div class="container">
            <div class="header-menu">
                <nav>
                    <ul>
                        <li>Contato</li>
                        <li>Sobre nós</li>
                        <li>Cadastrar-se</li>
                        <li>Entrar</li>
                    </ul>
                </nav>
            </div>
        </div>
            <figure class="image">
                <img src="assets/Imagens/Logo.png" class="image-login" alt="Logo">
            </figure>  
    </header>
    <section id="section-login">
        <div class="container">
            <?php
                if(isset($_SESSION['usuario_invalido'])){
            ?>
            <div class="usuario-invalido">
                <h4>Erro: Usuario ou senha invalidos!</h4>
            </div>
            <?php  
            }
                unset($_SESSION['usuario_invalido']);
            ?>
            <div class="box-login">
                <form action="confirma.php" method="POST">         
                    <h1>Login</h1>
                    <br>
                    <input type="text" class="input-text" name="usuario-login" placeholder="Nome" required>
                    <br>
                    <br>
                    <input type="password" class="input-text" name="senha-login" placeholder="Senha" required>
                    <br>
                    <br>
                    <button type="submit" class="input-button"> Entrar </button>
                    <a href="Cadastro.php" class="margin-cadastro">Criar conta</a>
                </form>
            </div> 
        </div>
    
    </section>
    
    </body>
</html>

