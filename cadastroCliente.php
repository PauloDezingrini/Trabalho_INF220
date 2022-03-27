<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novo cliente</title>
</head>
<body>
    <h1 class="titulo">Formulário de Cadastro</h1>
    <form action="post" action="gravaCliente.php">
        <label for="cname">Nome do usuário</label> <br>
        <input type="text" name="cnome" id="cnome" placeholder="NOME"> <br>
        <label for="cemail">Email do usuário</label> <br>
        <input type="email" name="cemail" id="cemail" placeholder="EMAIL"> <br>
        <label for="csenha">Senha do usuário [apenas números]</label> <br>
        <input type="number" name="csenha" id="csenha" placeholder="SENHA"> <br>
        <label for="csenha">Telefone do usuário [apenas números]</label> <br>
        <input type="number" name="ctel" id="ctel" placeholder="TELEFONE"> <br>
        <label for="cendereco">Endereço do usuário</label> <br>
        <input type="text" name="cendereço" id="cendereço" placeholder="ENDEREÇO"> <br>
        <label for="cnacionalidade">Nacionalidade</label> <br>
        <input type="text" name="cnacionalidade" id="cnacionalidade" placeholder="NACIONALIDADE"> <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>