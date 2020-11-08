<?php

class frontEnd {

    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function head() {
        return '<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="copyright" content="© 2018 ACM">
        <meta name="author" content="ACM">
        <link rel="shortcut icon" href="img/logo.png">
        <meta property="title" name="description" content="Abarrotes, semillas y algo mas en San Bartolo ✔">
        <meta name="description" content="Ofrecer un servico de calidar en venta de nuestros productos">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
              crossorigin="anonymous">
        <link rel="stylesheet" href="css/Estilo index.css">
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/main.js"></script>';
    }

    public function menu() {
        return '<ul>
                <li>
                <a href="Index.php">Inicio</a>
                </li>
                                <li>
                <a href="Productos.php"> Productos</a>
                     </li>
                                <li>
                                    <a href="Foro.php"> Blog</a>
                                </li>
                                <li>
                                    <a href="Contacto.php"> Contacto</a>
                                </li>
                            </ul>';
    }

    public function footer() {
        return '<div class="col-md-12">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Políticas de Privacidad</a>
                            </li>
                            <li>
                                <a href="#">Aviso de Privacidad</a>
                            </li>
                            <li>
                                <a href="#"> Proveedores</a>
                            </li>
                            <li>
                                <a href="#">Línea de Denuncia</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-12 iconos ">
                    <i class="fas fa-address-book"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-google-plus-g"></i>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-youtube"></i>
                </div>';
    }

    public function productosIndividuales($ide) {
        $p = $this->modelo->consultaProductos($ide);
        return '<div class="col-md-4">
                    <img src=" ' . $p ["foto"] . ' " alt="">                      
                    <h3> ' . $p ["titulo"] . ' </h3>
                    <p> ' . $p ["descripcion"] . ' </p>
                </div>';
    }

    public function productos() {
        $productos = $this->modelo->consultaProductos();
        $acu = '';
        foreach ($productos as $p) {
            $acu = $acu . '<div class="col-md-4">
                        <a href="Productos.php?ide=' . $p ["id_productos"] . '"> 
                            <img src="' . $p ["foto"] . '" alt="">
                        </a>
                        <h3> ' . $p ["titulo"] . '</h3>
                        <p>' . $p ["descripcion"] . '</p>
                    </div>';
        }
        return $acu;
    }

    public function servicios() {
        $servicios = $this->modelo->consultarServicio();
        $acu = '';
        foreach ($servicios as $s) {
            $acu = $acu . '<div class="col-md-3">
                        <h4> ' . $s ["titulo"] . ' </h4>
                        <img src= ' . $s ["imagen"] . ' alt="">
                        <p>' . $s ["descripcion"] . '</p>
                    </div>';
        }
        return $acu;
    }

    public function procesarFormulario() {
        if (isset($POST["nombre"]) && isset($POST["correo"]) && isset($POST["telefono"]) && isset($POST["asunto"]) && isset($POST["mensaje"])) {
            if ($this->modelo->insertarMensaje($POST["nombre"], $POST ["correo"], $POST ["telefono"], $POST["asunto"], $POST["mensaje"])) {
                return $this->mensaje("Gracias por escribirnos");
            } else {
                return $this->mensaje("No se ha podido enviar tu opinion");
            }
        }
        return '';
    }

    public function mensaje($mensaje) {
        return"<script>alert('" . $mensaje . "')</script>";
    }

}

/* public function team() {
      $team = $this->modelo->consultarTeam();
      $acu = "";
      foreach ($team as $t) {
      $acu = $acu . '
      <div class="col-md-4">
      <img src=" ' . $t[foto] . ' " alt="">

      <h3> ' . $t["titulo"] . '
      </h3

      <p> ' . $t["descripcion"] . '<br>
      </p>
      </div>';
      }
      }




      servicios
     * galeria
     * 
 * 
 * public function productosIndividuales($ide) {
        $r = $this->modelo->consultaProductos($ide);
        return '<div class="col-md-4">
                        <img src="' . $p ["foto"] . '" alt="">
                        <h3> ' . $p ["titulo"] . '</h3>
                        <p>' . $p ["descripcion"] . '</p>
                    </div>';
    }
     *  */