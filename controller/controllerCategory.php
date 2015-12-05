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

        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

    case 'read':
        $nameCat =$_GET['nameCat'];
        $category = modelCategory::select($nameCat);
        $view='';
        $pagetitle = "{$category->getNameCat()}";
        //$pagetitle = "{$category->getDescCat()}";
        //print_r( $category);
        //print_r( " {$category->getNameCat() } " ) ;
        //print_r( " {$category->getDescCat() } wtf " ) ;
        $tabModelOfCat = $category->getModelOfCategory($nameCat);
        print_r( $tabModelOfCat );
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

    case 'brandOf':
        $pagetitle =  $_GET['category'];
        $view= 'brandOf';
        $tab_modele = modelBrand::getModelOfBrand($_GET['brand']);
        break;



}