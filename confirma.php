<?php
session_start();
include ('config/conexao.php');

    if(isset($_POST['usuario-login']) || isset($_POST['senha-login'])){
        header('Location: Index.php');
        exit();
    }
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario-login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha-login']);

$query = "select usuario, senha from tb_cadastro where usuario = '{$usuario}' and senha = '{$senha}'";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1){
    $_SESSION['usuario-login'] = $usuario;
    header('location: pagina-inicial.php');
    exit();
} else{
    header('Location: Index.php');
    $_SESSION['usuario_invalido']=true;

}

