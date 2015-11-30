<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 27/10/15
 * Time: 18:13
 */
require "{$ROOT}{$DS}model{$DS}modelBrand.php";

switch ($action){
    case 'readAll':
        $view = 'All';
        $tab_brand = modelBrand::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case 'read':
        $pagetitle =  $_GET['idBrand'];
        $brand = modelBrand::select($_GET['idBrand']);
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case 'modelOf':
        $pagetitle =  $_GET['brand'];
        $view= 'ModelOf';
        $tab_modele = modelBrand::getModelOfBrand($_GET['brand']);
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}
