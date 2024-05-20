<?php

$usuario = $_POST['Usuario'];
$senha = $_POST['Senha'];

setcookie("user",$usuario, time() + (86400));

if($usuario != "teste")
{
    setcookie("status", "Usuario Incorreto", time() + (86400));
    header("Location: loginpage.php");
    exit();
}
elseif($senha != "teste")
{
    setcookie("status", "Senha Incorreta", time() + (86400));
    header("Location: loginpage.php");
    exit();
}
else
{  
    setcookie("status", "Logado", time() + (86400));
    header("Location: conteudo.php");
    exit();
}
