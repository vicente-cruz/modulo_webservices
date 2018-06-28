<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

require 'environment.php';

global $config;
$config = array();
if (ENVIRONMENT == "development") {
    define('BASE_URL','http://cursophp.pc/modulo_webservices/aula7_webservice');
    $config['dbtype'] = 'mysql';
    $config['dbhost'] = 'localhost';
    $config['dbname'] = 'projeto_webservice';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
else if (ENVIRONMENT == "testing") {
    define('BASE_URL','');
    $config['dbtype'] = '';
    $config['dbhost'] = '';
    $config['dbname'] = '';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
}
else if (ENVIRONMENT == "acceptance") {
    define('BASE_URL','');
    $config['dbtype'] = '';
    $config['dbhost'] = '';
    $config['dbname'] = '';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
}
else {
    define('BASE_URL','');
    $config['dbtype'] = '';
    $config['dbhost'] = '';
    $config['dbname'] = '';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
}
?>