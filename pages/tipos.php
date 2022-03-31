<?php
    $acao='recuperar';

    if(isset($_GET['buscar']) && $_GET['buscar'] == 'conta'){
        session_start();
        $consumos = $_SESSION['conta'];
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'data'){
        session_start();
        $consumos = $_SESSION['data']; 
    }else if(isset($_GET['buscar']) && $_GET['buscar'] == 'produto') {
        session_start();
        $consumos = $_SESSION['produto']; 
    } else require "../controller/tipos_controller.php";

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Frigobar</title>
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
                        <h1 class="logo">Cadastro de consumos</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->

            <form action="../controller/tipos_controller.php?acao=cadastro" method="post">
                
                <div class="linha">
                    <div class="coluna col3">
                        <label">Valor da diária <br></label>
                        <input type="number" name="diaria" id="" class="default_3">
                    </div>

                    <div class="coluna col3">
                        <label>N° de camas de casal <br></label>
                        <input type="number" name="n_camas_casal" id="" class="default_3">
                    </div>

                    <div class="coluna col3">
                        <label>N° de camas de solteiro <br></label>
                        <input type="number" name="n_camas_solteiro" id="" class="default_3">
                    </div>
                </div>

                <div class="linha">

                    <div class="coluna col3">
                        <label>Possui TV: <br></label>
                        <input type="number" name="tv"  class="default_3">
                    </div>

                    <div class="coluna col3">
                        <label>Possui Frigobar: <br></label>
                        <input type="number" name="frigobar"  class="default_3">
                    </div>

                    <div class="coluna col3">
                        <label>É adaptado: <br></label>
                        <input type="number" name="adaptado"  class="default_3">
                    </div>
                </div>

                <div class="linha">

                    <div class="coluna col8">
                        <input class="default_4" id="test_0" type="submit"  value="Cadastrar"/>
                    </div>
                </div>

            </form>
            
            
            <hr>

            <div class="linha list">
                <div class="coluna col1"> ID </div>
                <div class="coluna col2"> Diaria </div>
                <div class="coluna col2"> N° Cama de casal </div>
                <div class="coluna col2"> N° Cama de solteiro </div>
                <div class="coluna col1"> TV </div>
                <div class="coluna col1"> Frigobar </div>
                <div class="coluna col1"> Adaptado </div>
            </div>  


            <?php foreach($tipos as $keys =>$tipo){ ?>

                <div class="linha list" id="loc_<?= $tipo->Id_tipo ?>">

                    <div class="coluna col1"> <?= $tipo->Id_tipo ?> </div>
                    <div class="coluna col2"> <?= $tipo->Diaria ?> </div>
                    <div class="coluna col2"> <?= $tipo->N_cama_casal?> </div>
                    <div class="coluna col2"> <?= $tipo->N_cama_solteiro ?> </div>
                    <div class="coluna col1"> <?= $tipo->TV ?> </div>
                    <div class="coluna col1"> <?= $tipo->Frigobar ?> </div>
                    <div class="coluna col1"> <?= $tipo->Adaptado ?> </div>
               
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