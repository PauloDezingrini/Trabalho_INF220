<?php

    if(isset($_GET['resultado'])){
        session_start();
        $resultados = $_SESSION['resultado'];

    } 

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
                        <h1 class="logo">Implementação das consultas</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <div class="linha">
                <form action="../controller/consultas_controller.php?consulta=1" method="POST">

                
                    <div class="coluna col6">
                        
                        <input class="default_6" id="test_0" type="submit"  value="Executar Consulta 1"/>
                    
                    </div>
                    
                </form>

                <form action="../controller/consultas_controller.php?consulta=2" method="POST">

                    <div class="coluna col 12"> 

                        <input class="default_6" id="test_0" type="submit"  value="Executar Consulta 2"/>

                    </div>

                </form>
            </div>
            
            <div class="linha">
                <form action="../controller/consultas_controller.php?consulta=3" method="POST">

                    <div class="coluna col6">
                        
                        <input class="default_6" id="test_0" type="submit"  value="Executar Consulta 3"/>
                    
                    </div>
                    
                </form>

                <form action="../controller/consultas_controller.php?consulta=4" method="POST">

                    <div  class="coluna col 12"> 

                        <input class="default_6" id="test_0" type="submit"  value="Executar Consulta 4"/>

                    </div>

                </form>
            </div>
            
            <div class="linha">
                <form action="../controller/consultas_controller.php?consulta=5" method="POST">

                    <div class="coluna col6">
                        
                        <input class="default_6" id="test_0" type="submit"  value="Executar Consulta 5"/>
                    
                    </div>
                    
                </form>

                <form action="../controller/consultas_controller.php?consulta=6" method="POST"> 

                    <div  class="coluna col 12"> 

                        <input class="default_6" id="test_0" type="submit"  value="Executar Consulta 6"/>

                    </div>

                </form>
            </div>
            
            
            
            <hr>

        
            <?php if(isset($_GET['resultado']) && $_GET['resultado'] == '1') { ?>
                <div class="linha list">
                    <div class="coluna col3"> Nome </div>
                    <div class="coluna col3"> Email </div>
                    <div class="coluna col3"> Telefone </div>
                </div>  
                
                <?php foreach($resultados as $keys => $resultado) { ?>

                <div class="linha list" id="loc_<?= $resultado->Email ?>">

                    <div class="coluna col3"> <?= $resultado->Nome ?> </div>
                    <div class="coluna col3"> <?= $resultado->Email ?> </div>
                    <div class="coluna col3"> <?= $resultado->Telefone?> </div>
               
                </div>
                <br>
            <?php } ?>
            <?php } ?>

            <?php if(isset($_GET['resultado']) && $_GET['resultado'] == '2') { ?>
                <div class="linha list">
                    <div class="coluna col3"> ID </div>
                    <div class="coluna col3"> Nome </div>
                </div>  

                <div class="linha list" id="loc_<?= $resultados[0]->Id_func ?>">

                    <div class="coluna col3"> <?= $resultados[0]->Id_func ?> </div>
                    <div class="coluna col3"> <?= $resultados[0]->nome ?> </div>

                </div>
                <br>
            <?php } ?>
            
            <?php if(isset($_GET['resultado']) && $_GET['resultado'] == '3') { ?>
                <div class="linha list">
                    <div class="coluna col3"> Filial </div>
                    <div class="coluna col3"> Apartamento </div>
                    <div class="coluna col3"> Nome </div>
                </div>  

                <?php foreach($resultados as $keys => $resultado) { ?>
                    <div class="linha list" id="loc_<?= $resultado->Email ?>">

                        <div class="coluna col3"> <?= $resultado->Cidade ?> </div>
                        <div class="coluna col3"> <?= $resultado->N_Ap ?> </div>
                        <div class="coluna col3"> <?= $resultado->Nome?> </div>

                    </div>
                    <br>
                <?php } ?>
            <?php } ?>

            <?php if(isset($_GET['resultado']) && $_GET['resultado'] == '4') { ?>
                <div class="linha list">
                    <div class="coluna col3"> Filial </div>
                    <div class="coluna col3"> Número de Apartamentos </div>
                </div> 
                
                <?php foreach($resultados as $keys => $resultado) { ?>
                    <div class="linha list">

                        <div class="coluna col3"> <?= $resultado->cidade ?> </div>
                        <div class="coluna col3"> <?= $resultado->NúmeroApartamentos ?> </div>

                    </div>
                    <br>
                <?php } ?>
            <?php } ?>

            <?php if(isset($_GET['resultado']) && $_GET['resultado'] == '5') { ?>
                <div class="linha list">
                    <div class="coluna col3"> Nome </div>
                </div> 
                <?php foreach($resultados as $keys => $resultado) { ?>
                    <div class="linha list">

                        <div class="coluna col3"> <?= $resultado->Nome ?> </div>
                        
                    </div>
                    <br>
                <?php } ?>
            <?php } ?>

            <?php if(isset($_GET['resultado']) && $_GET['resultado'] == '6') { ?>
                <div class="linha list">
                    <div class="coluna col3"> Filial </div>
                    <div class="coluna col3"> Nome </div>
                </div> 

                <?php foreach($resultados as $keys => $resultado) { ?>
                    <div class="linha list">

                        <div class="coluna col3"> <?= $resultado->Cidade ?> </div>
                        <div class="coluna col3"> <?= $resultado->Nome ?> </div>
                        
                    </div>
                    <br>
                <?php } ?>
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