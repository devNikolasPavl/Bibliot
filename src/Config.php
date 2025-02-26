<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_erros', 1);

    session_start();

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'library');
    define('DB_PREFIX', 'lib_');

    define('SECRET', '123456');
    define('DATE_FORMAT', 'd.m.Y H:i:s');

    define('USER', 0);
    define('LIBRARIAN', 1);

    set_include_path(get_include_path().PATH_SEPARATOR.'src');
    spl_autoload_register();
?>