<?php 

    /* Para obtener el 'Identificador Unifore de Recursos' */ 
    define('URI', $_SERVER['REQUEST_URI']);

    /* Para el Autoload */
    define('CORE', dirname(__DIR__). '/system/core/');
    define('DEFAULT_CONTROLLER', 'home');

    /* Para la ruta de los controladores */
    define('PATH_CONTROLLERS', dirname(__DIR__).'/app/controllers/');

    /* define('PATH_VIEWS','app/views'); */
    define('PATH_VIEWS', 'web-incidencias/app/views/');
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);

    /* Para el nombre del folder principal */
    define('FOLDER_PATH', '/web-incidencias');
    define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
    define('HELPER_PATH', 'system/helper/');

    /* Para la BD */
    define('SGBD', 'mysql:host=localhost;dbname=incidencias_dev;charset=utf8');
    define('USER', 'root');
    define('PASS', '123456');
    define('ERROR_REPORTING_LEVEL', -1);

    /* DATA INC */
    define('ADD_DI', '.inc.');
    define('DATAI', '.inc_data.');
    
    /* AUTOLOAD DATA */
    define('DATA', 'app/data/');
