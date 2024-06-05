<?php

    interface usuario{
        public function consulta_usuario($email);
        public function edicion_usuario($email, $contrasena);
        public function crear_usuario($email, $contrasena);
    }

?>