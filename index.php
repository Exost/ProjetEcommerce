<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 13:08
 */
session_start();

    $ROOT = __DIR__;  /*  Correspond à /var/www/html/private/TD4
                               permet de le rendre portable
                            */

    // DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
    $DS = DIRECTORY_SEPARATOR;

require_once ("model{$DS}modelShoppingCart.php");

    if(!isset($_GET['action'])) // s'il n a pas d'action
        $action = "readAll";
    else
        $action = $_GET["action"]; // on recupère l'action

    if(!isset($_GET["controller"])) // par defaut
        $controller = 'modele';
    else
        $controller = $_GET["controller"];

    $view ='';

    $layout='viewVisitor';


if(isset($_SESSION['id'])){
    $layout ='viewConnected';
    if($_SESSION['rank']=='admin'){
        $layout='viewAdmin';
    }

}
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
            require ("controller{$DS}controllerCategory.php");
            break;
        case 'search':
            require ("controller{$DS}controllerSearch.php");
            break;
        case 'shoppingCart':
            require ("controller{$DS}controllerShoppingCart.php");
            break;

    }

?>