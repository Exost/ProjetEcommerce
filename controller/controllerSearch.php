<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 30/11/15
 * Time: 21:49
 */

 // gestion de recherche
require("{$ROOT}{$DS}model{$DS}modelSearch.php");

$view ='Result';
$array = modelSearch::search($_POST['the_research']);

require("{$ROOT}{$DS}view{$DS}{$layout}.php");