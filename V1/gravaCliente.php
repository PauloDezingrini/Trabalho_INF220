<?php
    include("conecta.php");

    $cnome = $_POST["cnome"];
    $cemail = $_POST["cemail"];
    $csenha = $_POST["csenha"];
    $ctel = $_POST["ctel"];
    $cendereco = $_POST["cendereço"];
    $nac = $_POST["cnacionalidade"];

    mysqli_query($conecta, "insert into cliente (Nome,Endereço,Nacionalidade,Telefone,Email,Senha) values (, '$cnome', '$cendereco', '$nac', '$ctel','$cemail', '$csenha')");

    header("location:listaClientes.php");
?>