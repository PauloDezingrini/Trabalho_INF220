<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de consumo em frigobares</title>
</head>
<body>
    <h1>Listagem de consumo em frigobares</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DO CONSUMO</strong></td>
            <td><strong>DATA DO CONSUMO</strong></td>
            <td><strong>PRODUTO CONSUMIDO</strong></td>
            <td><strong>QUANTIDADE</strong></td>
            <td><strong>VALOR</strong></td>
            <td><strong>REGISTRADO PELA CAMAREIRA</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from consumo_frigobar");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_consumo"]?></td>
                    <td><?=$campo["Data_consumo"]?></td>
                    <td><?=$campo["Produt"]?></td>
                    <td><?=$campo["Quant"]?></td>
                    <td><?=$campo["Valor"]?></td>
                    <td><?=$campo["Registrado_por"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>