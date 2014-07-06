<?php
/**
 * User: Nilesh Sadarangani
 * Date: 03/07/14
 */
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)) . DS . 'blackjack');


function __autoload($className) {
    $folders = array('controller', 'helper', 'model', 'library');
    foreach ($folders as $folder) {
        $path = ROOT . DS . $folder . DS .$className . '.php';
        if (file_exists($path)) {
            require_once($path);
        }
    }
}

$indexController = new indexController();
$indexController->actionIndex();