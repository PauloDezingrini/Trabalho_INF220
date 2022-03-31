<?php
    $acao = 'recuperar';
    require "../controller/reserva_controller.php";

    if(!isset($_GET['tipos']))
        $action = "../controller/apartamento_controller.php?acao=buscar_tipos";
    else{
        $action = "../controller/reserva_controller.php?acao=preparar_reserva";
        session_start();
        $apartamentos = $_SESSION['tipos'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Reserva</title>
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
                                <li><a href="reservas_2.php">reservas</a></li>
                                <li><a href="../pages/login.php">Login</a></li>
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
                        <h1 class="logo">Faça sua reserva</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="<?= $action ?>" method="post">
                <div class="linha">

                    <div class="coluna col2">
                        <label>Cidade</label>
                        <select name="cidades" id="" class="default_2">
                            <?php foreach($hoteis as $keys => $hotel) { ?>
                                <option value="<?= $hotel->Id_filial?>" class="teste"><?= $hotel->Cidade.' - '.$hotel->Estado?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                        
                    <input type="text" value="<?= $_GET['email']?>" name='email' hidden>
        
                    <div class="coluna col3">
                        <label class="guest">Pessoas</label>
                        <input id="guest" type="number" placeholder="max 4" name="guest" class="default_2"/>
                    </div>

                    <div class="coluna col3">
                        <label class="checkin">Check-in</label>
                        <input id="checkin" type="date" name="checkin" />
                    </div>
    
                    <div class="coluna col3">
                        <label class="checkout">Check-out</label>
                        <input id="checkout" type="date" name="checkout" />
                    </div>
    
                    <div class="coluna col2">
                        </br>
                        <input type="submit" class="button2" value="Buscar"></input>
                    </div>

                </div>


                <div class="linha" >
                    <!-- COMEÇO DA GAMBIARRA -->
                    <div class="coluna col12 center">
                        <label class="sem-marcador sem-padding ">
                        
                        <?php if(isset($_GET['tipos']) && $_GET['tipos'] == 1) { ?>
 
                            <p>Tipos de apartamentos</p>
                            <?php foreach($apartamentos as $keys => $apartamento) { ?>
                                
                                <input type="radio" name="tipo" id="<?= $apartamento->Id_tipo ?>" value="<?= $apartamento->Id_tipo ?>">
                                    <?= $apartamento->Id_tipo ?> <br>
                                    <i onclick="enviar(<?= $apartamento->Id_tipo ?>)"><img src="../img/Ap_2.jfif" alt="Quarto 3" /></i>
                                    <br>
                                </input>
                            
                            <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </form>
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