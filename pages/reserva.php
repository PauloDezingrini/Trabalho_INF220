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
                                <li><a href="reserva.php">reservas</a></li>
                                <li><a href="#">contato</a></li>
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
            <form action="#" method="post">
                <div class="linha">
                    <div class="coluna col3">
                        <label>Guest</label>
                        <input class="busca" id="guest" type="number" placeholder="max 4" name="guest" />
                    </div>

                    <div class="coluna col3">
                        <label class="check">Check-in</label>
                        <input class="busca" id="checkin" type="date" name="checkin" />
                    </div>

                    <div class="coluna col3">
                        <label class="check">Check-out</label>
                        <input class="busca" id="checkout" type="date" name="checkout" />
                    </div>

                    <div class="coluna col3">
                        </br>
                        <a class="button" href="reserva.php">Buscar</a>
                    </div>
                </div>

                <div class="linha">
                    <div class="coluna col6">
                        <ul class="sem-marcador sem-padding ">

                            <li>
                                <p>Tipo A</p>
                                <a href="reservas_2.php"><img src="../img/Ap_0.jfif" alt="Quarto 1" /></a>
                            </li>
                            <li>
                                <p>Tipo B</p>
                                <a href="reservas_2.php"><img src="../img/Ap_1.jfif" alt="Quarto 2" /></a>
                            </li>
                            <li>
                                <p>Tipo C</p>
                                <a href="reservas_2.php"><img src="../img/Ap_2.jfif" alt="Quarto 3" /></a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="coluna col6">
                        <ul class="sem-marcador sem-padding">
                            <li>
                                <p>Tipo D</p>
                                <a href="reservas_2.php"><img src="../img/Ap_3.jfif" alt="Quarto 4" /></a>
                            </li>
                            <li>
                                <p>Tipo E</p>
                                <a href="reservas_2.php"><img src="../img/Ap_4.jfif" alt="Quarto 5" /></a>
                            </li>
                        </ul>
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