<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 21/10/15
 * Time: 12:55
 */
require_once("{$ROOT}{$DS}model{$DS}modelModele.php");
require_once ("{$ROOT}{$DS}model{$DS}modelBrand.php");
require_once ("{$ROOT}{$DS}model{$DS}modelCategory.php");


switch ($action){
    case 'readAll':
        $tabModele = modelModele::getAll();
        $view = "All";
        break;

    case 'read':
        $id =$_GET['idMod'];
        $modele = modelModele::select($id);
        $view='';
        break;

    case 'create': // WTF t'as fais quoi la ?
        $view ='create';
        //$tab_Brand = modelBrand::getAll();
        //$tab_Cat = modelCategory::getAll();// TODO WTF ?!!
        $pagetitle = "Enregistrer un Modele";
        $controller = "Modele";
        $idM = $_GET['idMod'];
        $nameM = $_GET['nameMod'];
        $priceM = $_GET['priceMod'];
        $descM = $_GET['descMod'];
        $stockM = $_GET['stockMod'];
        $newM = New modelModele($idM, $nameM ,$priceM ,$descM ,$stockM ) ;
        $tabModele = modelModele::insert( $newM);
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

        break;

    case 'created':
        $view = 'created';
        $m = modelModele::countElem();
        $idModele =$m['ResCount']+1;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $nameCat = $_POST['category'];
        $nameBrand = $_POST['brand'];
        $mdl = new modelModele($idModele,$name,$price,$stock,$nameCat,$nameBrand);
        $mdl->insert($mdl);
        break;

}
require("{$ROOT}{$DS}view{$DS}view.php");