<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 21/10/15
 * Time: 12:55
 */
require("{$ROOT}{$DS}model{$DS}modelItem.php");

switch ($action){
    case 'readAll':
        $tabItem = modelArticle::getAllarticles();
        $view = "All";
        $pagetitle = "Liste Articles";
        require ("{$ROOT}{$DS}view{$DS}{$layout}.php");
        //require("{$ROOT}{$DS}view{$DS}viewVisitor.php");
        break;
    case 'read':
        $id =$_GET['idArt'];
        $article = modelArticle::getArtById($id);
        $view='';
        require("{$ROOT}{$DS}view{$DS}viewVisitor.php");
        break;
    case 'create':
        $view ='Create';
        $tab_Brand = modelArticle::getAll();
        $tab_Cat = modelArticle::getAll();
        break;

}