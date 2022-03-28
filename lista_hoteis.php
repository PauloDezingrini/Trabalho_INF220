<?php
    $acao = 'recuperar';
    require "controller/hotel_controller.php"
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste do form para hoteis</title>
</head>
<body>


    <h1>Listagem de hoteis</h1>
    <table width="90%">
        <tr>
            <td><strong>FILIAL</strong></td>
            <td><strong>CIDADE</strong></td>
            <td><strong>ESTADO</strong></td>
        </tr>

        <?php foreach($hoteis as $keys =>$hotel){ ?>
            <tr>
                <td><?= $hotel->Id_filial ?></td>
                <td><?= $hotel->Cidade ?></td>
                <td><?= $hotel->Estado ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>