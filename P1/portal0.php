<?php
    //view_form.php

/**
 * * Descripción: Controlador principal
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @author  Cristina <al375866@uji.es> <fulanito@example.com>
 * * @copyright 2020 Cristina
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 2

 * */

$central = "/partials/login.php";
include(dirname(__FILE__)."/partials/header.php");
include(dirname(__FILE__)."/partials/menu.php");
include(dirname(__FILE__).$central); 
include(dirname(__FILE__)."/partials/footer.php");
?>