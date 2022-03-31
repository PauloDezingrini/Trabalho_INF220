<?php
    $acao='recuperar';

    if(isset($_GET['buscar']) && $_GET['buscar'] == 'email'){
        session_start();
        $reservas = $_SESSION['email'];
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'data') {
        session_start();
        $reservas = $_SESSION['data']; 
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'tipo') {
        session_start();
        $reservas = $_SESSION['tipo']; 
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'filial'){
        session_start();
        $reservas = $_SESSION['filial']; 
    }else require "../controller/reserva_adm_controller.php";
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Reservas</title>
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
                                <li><a href="reservas_adm.php">reservas</a></li>
                                <li><a href="hoteis.php">hotéis</a></li>
                                <li><a href="clientes.php">clientes</a></li>
                                <li><a href="funcionarios.php">Funcionários</a></li>
                                <li><a href="hospedagem.php">Hospedagem</a></li>
                                <li><a href="frigobar.php">Frigobar</a></li>
                                <li><a href="#">Serviços</a></li>
                                <li><a href="consulta.php">Consultas</a></li>
                                <li><a href="tipos.php">Tipos</a></li>
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
                        <h1 class="logo">Lista de reservas</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="../controller/reserva_adm_controller.php?acao=email" method="post">
        
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

            <form action="../controller/reserva_adm_controller.php?acao=data" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Data</br></label>
                        <input class="default_4" id="test_0" type="date" name="data" />
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>

            <form action="../controller/reserva_adm_controller.php?acao=tipo" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Tipo</br></label>
                        <select class="default_4" id="test_0" type="text" name="tipo" >
                            <?php foreach($tipos as $keys => $tipo) { ?>
                                <option value="<?= $tipo->Id_tipo?>" class="teste"><?= $tipo->Id_tipo ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>
            
            <form action="../controller/reserva_adm_controller.php?acao=filial" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Filial</br></label>
                        <select class="default_4" id="test_0" type="text" name="filial" >
                            <?php foreach($hoteis as $keys => $hotel) { ?>
                                <option value="<?= $hotel->Id_filial?>" class="teste"><?= $hotel->Cidade.' - '.$hotel->Estado?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>

            <hr>

            <div class="linha list">
                <div class="coluna col1"> ID </div>
                <div class="coluna col2"> Email do cliente </div>
                <div class="coluna col2"> Data de entrada</div>
                <div class="coluna col2"> Data de saida </div>
                <div class="coluna col2"> Filial </div>
                <div class="coluna col2"> Tipo </div>
            </div>  


            <?php foreach($reservas as $keys =>$reserva){ ?>

                <div class="linha list" id="loc_<?= $reserva->Id_reserva ?>">

                    <div class="coluna col1"> <?= $reserva->Id_reserva ?> </div>
                    <div class="coluna col2 "> <?= $reserva->Email_cliente ?> </div>
                    <div class="coluna col2 teste"> <?= $reserva->Data_entrada?> </div>
                    <div class="coluna col2"> <?= $reserva->Data_saida ?> </div>
                    <div class="coluna col2"> <?= $reserva->Reservado_onde ?> </div>
                    <div class="coluna col2"> <?= $reserva->Id_tipo ?> </div>
               
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