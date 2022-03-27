<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de camareiras</title>
</head>
<body>
    <h1>Listagem de camareiraa</h1>
    <table width="90%">
        <tr>
            <td><strong>ID DA CAMAREIRA</strong></td>
            <td><strong>NOME DA CAMAREIRA</strong></td>
        </tr>

        <?php
            include("conecta.php");
            $selecaoCliente = mysqli_query($conecta, "select * from camareira");
            while($campo = mysqli_fetch_array($selecaoCliente)){ ?>
                <tr>
                    <td><?=$campo["Id_func"]?></td>
                    <td><?=$campo["Nome"]?></td>
                </tr>
        <?php  } ?>
    </table>
</body>
</html>