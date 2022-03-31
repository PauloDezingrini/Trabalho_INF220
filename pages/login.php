<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Login</title>
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
                                <li><a href="../index.html">home</a></li>
                                <li><a href="reserva.html">reservas</a></li>
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
                        <h1 class="logo">Login</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="../controller/login_controller.php" method="post">
        
                <div class="linha">
                    <div class="coluna col3">
                        <label>Email</br></label>
                        <input class="default_3" id="test_0" type="text" name="email" />
                    </div>

                </div>
        

                <div class="linha">
                    <div class="coluna col3">
                        <label>Senha</br></label>
                        <input class="default_3" id="test_0" type="password" name="senha" />
                    </div>
                    
                </div>
                
                <div class="linha">
                    
                    <div class="coluna col3">
                        <input class="button" type="submit" value="Logar"/>
                    </div>

                </div>
            </form>
        </div>

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