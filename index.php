<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Qualidade e Conforto</title>
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" />
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
                                <li><a href="index.php">home</a></li>
                                <li><a href="pages/reservas_2.php">reservas</a></li>
                                <li><a href="pages/login.php">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>

        <?php if(isset($_GET['reservado']))  { ?>

            <center>

                <div class="form linha">
    
                    <div class="col8 color_teste" >
                            <h3 class="default_7">Reservado com sucesso</h3>
                    </div>
    
                </div>

            </center>

        <?php } ?>

        <div class="footer footer_abs">
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