<?php
define("hostname","localhost"); // localhost
define("database","gestion_etudiants");
define("username","root");
define("password","");


define('BASE_URL', explode('app.php', $_SERVER['SCRIPT_NAME'])[0]);

define("default_controller","SecurityController");

session_start();