<?php
include "conexao.php";

//session_start();

$usuario = $_POST['edt_usuario'];
$senha = $_POST['edt_senha'];

echo " $usuario // $senha ";

$sql = "SELECT * FROM `conta` WHERE `usuario` = '$usuario' AND `senha` = '$senha' ";

$linhasconsulta = mysqli_query($conexao,$sql);

if (!$linhasconsulta) {
   die("erro".mysqli_connect_error());
}

if($linhasconsulta > 0) {

      //  $_SESSION['usuario']=$_POST['edt_usuario'];
      //  $_SESSION['senha']=$_POST['edt_senha'];

        echo "Voce foi autenticado com sucesso! Aguarde que logo te redirecionaremos vc.";
} else {
        echo " Autenticação falhou, usuario ou senha errados.";
}
?>
