<?php
    include("conecta.php");

    $cnome = $_POST["cnome"];
    $cemail = $_POST["cemail"];
    $csenha = $_POST["csenha"];
    $ctel = $_POST["ctel"];
    $cendereco = $_POST["cendereço"];
    $nac = $_POST["cnacionalidade"];

    mysqli_query($conecta, "insert into cliente (Email, Nome_cliente, Tel, Endereço, Nacionalidade, Senha) values ('$cemail', '$cnome', '$ctel', '$cendereco', '$nac', '$csenha')");

    header("location:listaClientes.php");
?>