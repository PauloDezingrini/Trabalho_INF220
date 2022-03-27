<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de serviços</title>
</head>
<body>
    <h1>Listagem de serviços</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DO SERVIÇO</strong></td>
            <td><strong>DATA DO SERVIÇO</strong></td>
            <td><strong>APARTAMENTO SOLICITANTE</strong></td>
            <td><strong>FEITO PELA CAMAREIRA</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from servicos");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_serviço"]?></td>
                    <td><?=$campo["Data_serviço"]?></td>
                    <td><?=$campo["Num_ap"]?></td>
                    <td><?=$campo["Camareira"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>