<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 13:08
 */


    $ROOT = __DIR__;  /*  Correspond à /var/www/html/private/TD4
                               permet de le rendre portable
                            */

    // DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
    $DS = DIRECTORY_SEPARATOR;

    if(!isset($_GET['action'])) // s'il n a pas d'action
        $action = "readAll";
    else
        $action = $_GET["action"]; // on recupère l'action

    if(!isset($_GET["controller"]))
        $controller = 'modele';
    else
        $controller = $_GET["controller"];

    $view ='';

    switch ($controller){
        case 'modele':
            require("controller{$DS}controllerModele.php");
            break;
        case 'brand':
            require ("controller{$DS}controllerBrand.php");
            break;
        case 'user':
            require ("controller{$DS}controllerUser.php");
            break;
        case 'category':
            break;
        case 'search':
            require ("controller{$DS}controllerSearch.php");
            break;

    }

?>