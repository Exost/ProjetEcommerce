<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 02/12/2015
 * Time: 10:57
 */

//require_once("{$ROOT}{$DS}model{$DS}modelModele.php");
//require_once ("{$ROOT}{$DS}model{$DS}modelBrand.php");
require_once ("{$ROOT}{$DS}model{$DS}modelCategory.php");


switch ($action){
    case 'readAll':
        $pagetitle ='Category';
        $tabCat = modelCategory::getAll();
        $view = "All";
        print_r( "test" );
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

    case 'read':
        $nameCat =$_GET['cat'];
        $category = modelModele::select($nameCat);
        $view='';
        $pagetitle = "{$category->getNameCat()}";
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

    case 'create':
        $view ='Create';
        //$tab_Brand = modelBrand::getAll();
        //$tab_Cat = modelCategory::getAll();
        $pagetitle = "Enregistrer une Catégorie";
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