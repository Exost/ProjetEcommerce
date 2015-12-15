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
        case 'purchase':
            if(!isset($_SESSION['id'])){ // si l'utilisateur n'est pas co
                $controller='user';
                $view='Login';
                $error= 'veuillez vous connecter afin de poursuivre';
            }else{
                $view='Purchase';
            }
            break;
        case 'delete':
            if(isset($_GET['idItem'])){
                $id =$_GET['idItem'];
                $item =modelItem::select($id);
                shoppingCart::delItem($item);
            }
            $view='All';
            break;
        case 'addItem':
            if(isset($_POST['color'])&&isset($_POST['size'])&&isset($_POST['idMod'])){
                $color = $_POST['color'];
                $size = $_POST['size'];
                $id = $_POST['idMod'];
                $item =modelItem::getItembyColorSizeModele($id,$color,$size);
                shoppingCart::addItem($item,1);
            }

            $view ='All';
            break;
}
require ("{$ROOT}{$DS}view{$DS}{$layout}.php");


