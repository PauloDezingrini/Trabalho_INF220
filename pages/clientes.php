<?php
    $acao='recuperar';

    if(isset($_GET['buscar']) && $_GET['buscar'] == 'email'){
        session_start();
        $clientes = $_SESSION['email'];
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'nac') {
        session_start();
        $clientes = $_SESSION['nac']; 
    }else require "../controller/cliente_controller.php";
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Clientes</title>
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../css/style.css" />
    
    </head>


    <body>
        <div class="header">    
            <div class="linha">
                <header>
                    <div class="coluna col4">
                        <h1 class="logo">HOTEL BOM SONO</h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a href="../index.php">home</a></li>
                                <li><a href="#">reservas</a></li>
                                <li><a href="hoteis.php">hotéis</a></li>
                                <li><a href="#">clientes</a></li>
                                <li><a href="#">Funcionários</a></li>
                                <li><a href="#">Hospedagem</a></li>
                                <li><a href="#">Frigobar</a></li>
                                <li><a href="#">Contas</a></li>
                                <li><a href="#">Serviços</a></li>
                                <li><a href="#">Tipos</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>

        <div class="form linha">

            <section>
                <div class="linha">
                    <div class="coluna col12">
                        <h1 class="logo">Lista de clientes</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="../controller/cliente_controller.php?acao=email" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Email</br></label>
                        <input class="default_4" id="test_0" type="text" name="email" />
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>

            <form action="../controller/cliente_controller.php?acao=nac" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Nacionalidade</br></label>
                        <input class="default_4" id="test_0" type="text" name="nac" />
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>
            

            <hr>

            <div class="linha list">
                <div class="coluna col3"> Nome </div>
                <div class="coluna col3"> Email </div>
                <div class="coluna col2"> Nacionalidade</div>
                <div class="coluna col1"> Telefone </div>
            </div>  


            <?php foreach($clientes as $keys =>$cliente){ ?>

                <div class="linha list" id="loc_<?= $cliente->Id_cliente ?>">

                    <div class="coluna col3"> <?= $cliente->Nome ?> </div>
                    <div class="coluna col3 "> <?= $cliente->Email ?> </div>
                    <div class="coluna col2"> <?= $cliente->Nacionalidade?> </div>
                    <div class="coluna col1"> <?= $cliente->Telefone ?> </div>
               
                </div>
                <br>
            <?php } ?>

        </div>

        <div class="footer">
            <div class="linha">
                <footer>    
                    <div class="coluna col12">
                        <span>&copy; 2022 - Hotel Bom Sono Web</span>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>