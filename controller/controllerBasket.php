<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 10:38
 */
if(isset($_SESSION['id'])){ // si la session existe
    $pagetitle= 'Basket';
    switch($action){
        case 'readAll':
            $view ='All';
            break;
        case 'read':
            break;
        case 'addArticle':
            break;
        case 'delete':
            break;

    }
    require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
}
