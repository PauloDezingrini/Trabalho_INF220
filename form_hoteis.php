<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste do form para hoteis</title>
</head>
<body>
    
    <form method="post" action="controller/hotel_controller.php">
        <label for="cidade">Cidade: </label>    
        <input type="text" name="cidade" id="cidade">

        <label for="estado">Estado: </label>    
        <input type="text" name="estado" id="estado">

        <input type="submit" value="submit">
    </form>

</body>
</html>