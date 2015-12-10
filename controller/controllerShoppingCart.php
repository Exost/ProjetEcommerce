<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 10:38
 */


$pagetitle= 'Panier';
require_once ("{$ROOT}{$DS}model{$DS}modelShoppingCart.php");
require_once ("{$ROOT}{$DS}model{$DS}modelItem.php");
shoppingCart::createBasket();
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
        case 'addItem':
            $color = $_POST['color'];
            $size = $_POST['size'];
            $id = $_POST['idMod'];
            $item =modelItem::getItembyColorSizeModele($id,$color,$size);
            shoppingCart::addItem($item,1);
            $view ='All';
            break;
}
require ("{$ROOT}{$DS}view{$DS}{$layout}.php");


