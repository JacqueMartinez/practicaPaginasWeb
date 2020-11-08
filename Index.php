<?php
include_once './modelo/Modelo.php';
include_once './logica/frontEnd.php';
$fe = new frontEnd();
$fe->procesarFormulario();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $fe->head() ?>
        <title>Inicio</title>
        
    </head>

    <body>
        <!--Menuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu-->
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
        
        <!--Sliderrrrrrrrrrrrrrrrr-->
        <section class="container bajar ">
            <div class=" row contenido">
                <ul class=" col-md-12 slider">
                    <li>
                        <img src="img/slider1.jpg" alt="">
                        <section class="ventanas">
                        </section>
                    </li>
                    <li>
                        <img src="img/slider3.JPG" alt="">
                        <section class="ventanas">
                        </section>
                    </li>
                    <li>
                        <img src="img/slider 4.jpg" alt="">
                        <section class="ventanas">
                        </section>
                    </li>
                </ul>
            </div>
        </section>

        <!--Productosssssssssssssssssssssssssssssssss -->
        <section class="novedades">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h2> Productos</h2>
                    </div>
                    <?php echo $fe->productos(); ?>
                </div>
        </section>

        <!--Servicos que se ofrecennnnnnnnnnnnnnnnnnnnnnnnn -->
        <section class="servicios">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contamos con los Siguientes servicios.</h2>
                    </div>
                    <?php echo $fe->servicios(); ?>
                </div>
            </div>  
        </section>
        
        
        <!--Seccion de video y mas --------------------------------------->
        <section class="nuevo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Nustros servico</h3>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/BwvpQj9Wdl4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat esse. Dolores voluptate asperiores,
                            culpa facere, adipisci labore soluta officiis modi vitae eveniet est aut nostrum consectetur quod.
                            <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quidem accusamus inventore quo
                            ratione ad consequuntur optio error autem placeat eum facere repudiandae sapiente cum, architecto
                            magni odit recusandae aliquid. </p>
                    </div>
                    <div class="col-md-6">
                        <h4>Nuestra Historia</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit ut debitis illo, assumenda nostrum
                            quibusdam deserunt in incidunt obcaecati porro vel veniam </p>
                        <img class="ajuste" src="img/novedades3.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="img/empresas-de-servicios.jpg
                             " alt="">
                        <h4>Complacerte es un gusto</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque alias magni rem odio labore, quisquam
                            molestias doloribus. Inventore omnis recusandae possimus nulla? Commodi aspernatur tempore enim illum!
                            Culpa, unde laboriosam!</p>
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eveniet facere sint cum nulla commodi
                            similique vel placeat enim praesentium, eaque minima mollitia numquam, possimus ut dolore. Reiciendis,
                            ea mollitia. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, esse. Voluptatem
                            molestiae quas vitae ullam earum corrupti voluptate non veritatis debitis! Modi iste commodi est
                            cum delectus dolore fuga repellendus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam
                            similique, aliquid laudantium debitis eum, sapiente ducimus libero vel distinctio veniam est recusandae
                            voluptates maiores, commodi quas aperiam. Vitae, similique soluta. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Optio sequi, excepturi distinctio, neque sed repudiandae itaque quas ullam odio
                            nesciunt necessitatibus aspernatur? Quas cumque corrupti ipsum porro perspiciatis optio odit?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    <!--Footerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <?php echo $fe->footer() ?>
            </div>
        </div>
    </footer>
</body>

</html>