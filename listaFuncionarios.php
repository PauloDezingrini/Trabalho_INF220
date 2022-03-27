<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de funcionarios</title>
</head>
<body>
    <h1>Listagem de funcionarios</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DO FUNCIONARIO</strong></td>
            <td><strong>NOME DO FUNCIONARIO</strong></td>
            <td><strong>CARGO DO FUNCIONARIO</strong></td>
            <td><strong>TRABALHA NO HOTEL</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from funcionario");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_func"]?></td>
                    <td><?=$campo["Nome_func"]?></td>
                    <td><?=$campo["Cargo"]?></td>
                    <td><?=$campo["Trab_hotel"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>