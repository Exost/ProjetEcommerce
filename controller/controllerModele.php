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
require_once ("{$ROOT}{$DS}model{$DS}modelItem.php");

$pagetitle ='Watch My kicks';
switch ($action){
    case 'readAll':

        $tabModele = modelModele::getAll();
        $view = "All";
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

    case 'read':
        $id =$_GET['idMod'];
        $modele = modelModele::select($id);
        $tabItem = modelItem::getItemByModele($id); // tous les article
        $tabColor = modelItem::getAllColorOfModel($id);
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
    case 'filterBySize':
        if(isset($_GET['size'])){
            $tabModele = modelModele::filterBySize($_GET['size']);
            $view = 'All';
        }else{
            $view='Error';
            $error='Aucun resultat';
        }
        require("{$ROOT}{$DS}view{$DS}{$layout}.php");
    break;
    case 'filterByPrice':
        if(isset($_GET['price'])){
            $tabModele = modelModele::filterByPrice($_GET['price']);
            $view = 'All';
        }else{
            $view='Error';
            $error='Aucun resultat';
        }
        require("{$ROOT}{$DS}view{$DS}{$layout}.php");
        break;

}
