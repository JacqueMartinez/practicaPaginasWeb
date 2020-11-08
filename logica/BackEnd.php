<?php

class BackEnd {

    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function acortarTexto($texto, $caracteres) {
        return substr($texto, 0, $caracteres) . '...';
    }

    public function mensaje($mensaje) {
        return"<script>alert('" . $mensaje . "')</script>";
    }

    public function siAutentificado() {
        if (isset($_SESSION ["nombre"])) {
            return true;
        } else {
            return false;
        }
    }

    public function redireccionar($url) {
        header("Location:" . $url);
    }

    public function autentificar() {
        if (isset($_POST["nombre"]) && isset($_POST["contrasena"])) {
            $user = $this->modelo->consultarUsusario($_POST ["nombre"], $_POST ["contrasena"]);
            if (isset($user)) {
                $_SESSION ["nombre"] = $user;
            }
        }
    }

}
