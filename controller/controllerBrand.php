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
        break;

    case 'read':
        $brand = modelBrand::select($_GET['idBrand']);
        break;

    case 'articleOf':
        $view= 'ArticleOf';
        $tab_article = modelBrand::getArticleOfBrand($_GET['brand']);
        break;
}
require("{$ROOT}{$DS}view{$DS}view.php");