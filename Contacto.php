<?php
include_once './modelo/Modelo.php';
include_once './logica/frontEnd.php';
$fe = new frontEnd();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $fe->head() ?>
        <title>Contacto</title>
    </head>

    <body>
        
        <!--Menuuuuuuuuuuuuuuuuuuuuuuuuu -->
        <header>
            <div class="container">
                <div class="row menu">
                    <div class="col-md-2">
                        <h1>Abarrotes</h1>
                    </div>
                    <div class="col-md-10">
                        <nav>
                            <?php echo $fe->menu(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <section class="direccion">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 formulario">
                        <div>
                            <h3>Envianos un mensaje, o sugerencia.</h3>
                            <p>Envianos un mensaje pra saber tu opinion, contestaremos en breve tiempo</p>
                        </div>
                        <form  method="POST" action="">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input type="email" name="correo" class="form-control" placeholder="Escribe tu correo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" class="form-control" placeholder="Escribe tu telefono">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Asunto</label>
                                <input type="text" name="asunto" class="form-control" placeholder="Escribe el asunto">
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Escribe tu mensaje" style="height:100px;"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-secons float-right">Limpiar</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block float-right">
                                        <span>Enviar Mensaje</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <p>Direccion
                            <span <i class="fas fa-map-marker fa-2 fa-lg ubicacion">
                                </i>
                            </span>
                            <br>Calle 4 Oriente,centro de la ciudad
                            <br>
                            <br> Correo
                            <span <i class="fas fa-envelope fa-2 fa-lg ubicacion ">
                                </i>
                            </span>
                            <br>email.gmail.com
                            <br>
                            <br> Horario
                            <span <i class="fas fa-clock fa-2 fa-lg ubicacion">
                                </i>
                            </span>
                            <br> Lunes-Viernes 9:00-9:00
                            <br>Sabado 10:00-8:00
                        </p>
                    </div>
                </div>
            </div>
        </section>

        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <?php echo $fe->footer() ?>
                </div>
            </div>
        </footer>
    </body>

</html>