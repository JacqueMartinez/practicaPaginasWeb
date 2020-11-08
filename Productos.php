<?php
include_once './modelo/Modelo.php';
include_once './logica/frontEnd.php';
$fe = new frontEnd();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $fe->head() ?>
        <title>Productos</title>
    </head>

    <body>
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

        <section class="novedades">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h2> Productos</h2>
                    </div>
                    <?php echo $fe->productos(); ?>
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