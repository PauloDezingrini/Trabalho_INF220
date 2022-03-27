<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de tipos</title>
</head>
<body>
    <h1>Listagem de tipos</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DO TIPO</strong></td>
            <td><strong>VALOR DO APARTAMENTO</strong></td>
            <td><strong>QUANTIDADE DE CAMAS DE CASAL</strong></td>
            <td><strong>QUANTIDADE DE CAMAS DE SOLTEIRO</strong></td>
            <td><strong>ADAPTADO</strong></td>
            <td><strong>TEM TV</strong></td>
            <td><strong>TEM FRIGOBAR</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from tipo");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_tipo"]?></td>
                    <td><?=$campo["Valor"]?></td>
                    <td><?=$campo["Num_C_Casal"]?></td>
                    <td><?=$campo["Num_C_solteiro"]?></td>
                    <td><?=$campo["Adaptado"]?></td>
                    <td><?=$campo["Tv"]?></td>
                    <td><?=$campo["Frigobar"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>