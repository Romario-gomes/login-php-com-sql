<?php
session_start();
    include('config/conexao.php');

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome-cadastro']));
    $sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome-cadastro']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario-cadastro']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email-cadastro']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha-cadastro']));
   
    $sql = "SELECT * FROM tb_cadastro WHERE usuario = '{$usuario}'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)> 0){
        $_SESSION['usuario_existe'] = true;
        header('location: Cadastro.php');
        
       
    }
    
    else{
        $sql = "insert into tb_cadastro (nome,sobrenome,usuario,email,senha, data_cadastro) values ('$nome','$sobrenome','$usuario','$email','$senha', NOW())";
        if ($conexao ->query($sql) === true){
        $_SESSION ['status-cadastro'] = true;
            header('location: index.php');
    }

$conexao->close();
}
?>