<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 02/12/2015
 * Time: 10:57
 */

require_once("{$ROOT}{$DS}model{$DS}modelModele.php");
require_once ("{$ROOT}{$DS}model{$DS}modelBrand.php");
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
        $tabModelOfCat = modelModele::getModelOfCat($nameCat);

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
        $pagetitle = "Categorie Enregistré";
        $view = 'created';
        $m = modelCategory::countElem();
        $idCat =$m['ResCount']+1;
        $description = $_POST['desc'] ;
        $nameCat = $_POST['nameCat'];
        $newModel = new modelCategory($idCat,$nameCat,$description);
        $newModel->insert($newModel);


        $checkNew = modelCategory::exist($idCat);
        if ( $checkNew == true ) // Si return true alors existe
        {
            require("{$ROOT}{$DS}view{$DS}{$layout}.php");
        }
        break;

    case 'brandOf':
        $pagetitle =  $_GET['category'];
        $view= 'brandOf';
        $tab_modele = modelBrand::getModelOfBrand($_GET['brand']);
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;



}