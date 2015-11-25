<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 21/10/15
 * Time: 12:55
 */
require("{$ROOT}{$DS}model{$DS}modelArticle.php");

switch ($action){
    case 'readAll':
        $tabArticles = modelArticle::getAllarticles();
        $view = "All";
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;
    case 'read':
        $id =$_GET['idArt'];
        $article = modelArticle::getArtById($id);
        $view='';
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;

}