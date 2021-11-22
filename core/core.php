<?php

session_start();

//CHAMADA DAS CLASSES OU ARQUIVOS
require('vendor/autoload.php');//carrega todos os arquivos da pasta vendor

require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/EmailTemplate.php');

//CONSTANTES PARA DIRETÓRIOS
define('HTML_DIR', 'html/');
define('APP_TITLE', 'Portal Freitas');
define('APP_URL', 'http://localhost/portal/');


//CONSTANTES PARA O BD
define('DB_HOST', '127.0.0.1:3307');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'portal');




//CONSTANTES PARA PHPMAILER
define('PHPMAILER_HOST', 'smtp.office365.com');
define('PHPMAILER_USER', 'ldjmoreira@hotmai.com');
define('PHPMAILER_PASS', 'minecraft29');
define('PHPMAILER_PORT', 587);



$users = Users();

?>