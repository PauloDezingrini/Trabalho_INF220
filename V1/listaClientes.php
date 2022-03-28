<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de clientes</title>
</head>
<body>
    <h1>Listagem de clientes</h1>
    <table width="90%">
        <tr>
            <td><strong>NOME DO CLIENTE</strong></td>
            <td><strong>EMAIL DO CLIENTE</strong></td>
            <td><strong>TELEFONE DO CLIENTE</strong></td>
            <td><strong>ENDEREÇO DO CLIENTE</strong></td>
            <td><strong>NACIONALIDADE DO CLIENTE</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from cliente");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Nome"]?></td>
                    <td><?=$campo["Email"]?></td>
                    <td><?=$campo["Telefone"]?></td>
                    <td><?=$campo["Endereço"]?></td>
                    <td><?=$campo["Nacionalidade"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>