<?php
include_once "verificacion_control.php";


echo verificaAdministrador(1,"0000","1") ? "cuenta vefiricada": "cuenta fallida";