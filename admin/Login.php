<?php
session_start();
include_once '../modelo/Modelo.php';
include_once '../logica/BackEnd.php';
$BE = new BackEnd();
$BE->autentificar();
if ($BE->siAutentificado()) {
    $BE->redireccionar("index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="estilosLogin.css">
    </head>
    <body class="fondo">

        <header>
        </header>

        <!--Login-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4" ></div>
                    <div class="col-md-4">
                        <div class="login">
                            <h1>Abarrotes</h1>
                            <!--<div class="row">
                                <div class="col-md-3"> </div>
                                <div class="col-md-6"><img src="https://www.gcfaprendelibre.org/files/personage/image/11/R_p.png" alt="">
                                </div>
                            </div>-->
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label class="negritas"> Nombre:</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre">
                                </div>
                                <div class="form-group">
                                    <label class="negritas"> Contraseña: </label>
                                    <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <label class="checkbox negritas"> </label>
                                    <input type="checkbox"> Recuérdame </label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </section> 

        <footer>

        </footer>

    </body>
</html>