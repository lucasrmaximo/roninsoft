<?php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $banco = "roninsoft";
     $conexao = mysqli_connect($host,$user,$pass,$banco);
     
     if (!$conexao) {
        die('Sem conexao, erro de host ou user ou pass:'.mysqli_connect_error());
     }
?>
