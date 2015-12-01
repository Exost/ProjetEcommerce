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
        $pagetitle ='Sneaker';
        $tabModele = modelModele::getAll();
        $view = "All";
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

    case 'read':
        $id =$_GET['idMod'];
        $modele = modelModele::select($id);
        $view='';
        $pagetitle = "{$modele->getNameMod()} - {$modele->getNameBrand()}";
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

    case 'create':
        $view ='Create';
        $tab_Brand = modelBrand::getAll();
        $tab_Cat = modelCategory::getAll();
        $pagetitle = "Enregistrer un Modele";
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;


    case 'created':
        $pagetitle = "Modele Enregistré";
        $view = 'created';
        $m = modelModele::countElem();
        $idModele =$m['ResCount']+1;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'] ;
        $nameCat = $_POST['category'];
        $nameBrand = $_POST['brand'];
        //echo ( " $idModele , $name , $price , $description ,$nameCat  , $nameBrand "); // POUR TEST
        $newModel = new modelModele($idModele,$name,$price, $description , $nameCat ,$nameBrand);
        //print_r( $newModel );
        $newModel->insert($newModel);


        $checkNew = modelModele::exist($idModele);
        if ( $checkNew == true ) // Si return true alors existe
        {
            require("{$ROOT}{$DS}view{$DS}{$layout}.php");
        }
        break;

}
