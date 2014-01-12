<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('PATH') ? null : define('PATH', 'http://localhost:8080/annuaire'.DS);
defined('CONTROLLER_PATH') ? null : define('CONTROLLER_PATH', 'http://localhost:8080/annuaire/controller/');
defined('VIEW_PATH') ? null : define('VIEW_PATH', 'http://localhost:8080/annuaire/views/');
defined('CSS_PATH')? null : define('CSS_PATH','http://localhost:8080/annuaire/public/css/');
defined('JS_PATH')? null : define('JS_PATH','http://localhost:8080/annuaire/public/js/');
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER')   ? null : define("DB_USER", "root");
defined('DB_PASS')   ? null : define("DB_PASS", "");
defined('DB_NAME')   ? null : define("DB_NAME", "datenbank");

?>