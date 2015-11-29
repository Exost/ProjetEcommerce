<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 27/10/15
 * Time: 21:10
 */


    echo"<img src='ressources{$DS}img{$DS}brand{$DS}{$brand->getIdBrand()}-2.jpg' alt='{$brand->getLibBrand()}'
            style='width:1000;height:600px;'></Br>";
    echo "{$brand->getLibBrand()}</Br>";
    echo "voir <a href='index.php?controller=brand&action=modelOf&brand={$brand->getIdBrand()}'>
            articles de la marque<a/>";


?>

