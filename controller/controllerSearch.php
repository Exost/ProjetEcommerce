<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 30/11/15
 * Time: 21:49
 */

 // gestion de recherche
require("{$ROOT}{$DS}model{$DS}modelSearch.php");

$pagetitle='search';
$view = 'Empty';
if(isset($_POST['search'])){
    $array = modelSearch::search($_POST['search']);
    if(!empty($array))
        $view ='Result';
}


require("{$ROOT}{$DS}view{$DS}{$layout}.php");