<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de hospedagens</title>
</head>
<body>
    <h1>Listagem de hospedagens</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DA HOSPEDAGEM</strong></td>
            <td><strong>CHECK IN</strong></td>
            <td><strong>CHECK OUT</strong></td>
            <td><strong>CONTA DA HOSPEDAGEM</strong></td>
            <td><strong>APARTAMENTO HOSPEDADO</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from hospedagem");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_hosp"]?></td>
                    <td><?=$campo["Check_in"]?></td>
                    <td><?=$campo["Check_out"]?></td>
                    <td><?=$campo["Conta_hosp"]?></td>
                    <td><?=$campo["Ap_hosp"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>