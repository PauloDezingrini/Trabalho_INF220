<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de hoteis</title>
</head>
<body>
    <h1>Listagem de hoteis</h1>
    <table width="90%">
        <tr>
            <td><strong>FILIAL</strong></td>
            <td><strong>CIDADE DO HOTEL</strong></td>
            <td><strong>ESTADO DO HOTEL</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from hoteis");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_filial"]?></td>
                    <td><?=$campo["Cidade"]?></td>
                    <td><?=$campo["Estado"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>