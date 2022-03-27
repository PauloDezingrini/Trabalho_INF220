<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de apartamentos</title>
</head>
<body>
    <h1>Listagem de apartamentos</h1>
    <table width="90%">
        <tr>
            <td><strong>NÚMERO DO APARTAMENTOE</strong></td>
            <td><strong>PERTENCE AO HOTEL</strong></td>
            <td><strong>TIPO DO APARTAMENTO</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from apartamentos");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Num_ap"]?></td>
                    <td><?=$campo["P_hotel"]?></td>
                    <td><?=$campo["Tipo"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>