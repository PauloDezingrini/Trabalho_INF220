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
            <td><strong>DATA DO SERVIÇO</strong></td>
            <td><strong>APARTAMENTO SOLICITANTE</strong></td>
            <td><strong>LOCALIZADO NO HOTEL</strong></td>
            <td><strong>FEITO PELA CAMAREIRA</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from serviços");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Data"]?></td>
                    <td><?=$campo["N_Ap"]?></td>
                    <td><?=$campo["Id_filial"]?></td>
                    <td><?=$campo["Id_func"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>