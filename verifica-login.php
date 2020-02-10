<?php

if(!$_SESSION['usuario-login']){
    header('location: Index.php');
    exit();
}
?>