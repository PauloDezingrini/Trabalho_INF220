<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de contas</title>
</head>
<body>
    <h1>Listagem de contas</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DA CONTA</strong></td>
            <td><strong>VALOR TOTAL DA CONTA</strong></td>
            <td><strong>VALOR A PAGAR</strong></td>
            <td><strong>FORMA DE PAGAMENTO</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from conta");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_hosp"]?></td>
                    <td><?=$campo["Valor_total"]?></td>
                    <td><?=$campo["Valor_restaurante"]?></td>
                    <td><?=$campo["Forma_pagamento"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>