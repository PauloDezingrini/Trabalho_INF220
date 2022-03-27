<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de reservas</title>
</head>
<body>
    <h1>Listagem de reservas</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DA RESERVA</strong></td>
            <td><strong>APARTAMENTO RESERVADO</strong></td>
            <td><strong>DATA DA ENTRADA</strong></td>
            <td><strong>DATA DA SAIDA</strong></td>
            <td><strong>RESERVA CANCELADA</strong></td>
            <td><strong>TIPO DA RESERVA</strong></td>
            <td><strong>RESERVADO NO HOTEL</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from reservas");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_reserva"]?></td>
                    <td><?=$campo["Num_P"]?></td>
                    <td><?=$campo["Data_entrada"]?></td>
                    <td><?=$campo["Data_saida"]?></td>
                    <td><?=$campo["Cancel"]?></td>
                    <td><?=$campo["Tipo_reserva"]?></td>
                    <td><?=$campo["Reservado_em"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>