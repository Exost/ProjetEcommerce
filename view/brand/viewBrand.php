<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 27/10/15
 * Time: 21:10
 */


    echo"<img src='img{$DS}brand{$DS}{$brand->getIdBrand()}.jpg' alt='{$brand->getLibBrand()}'
            style='width:304px;height:228px;'></Br>";
    echo "{$brand->getLibBrand()}</Br>";
    echo "voir <a href='index.php?controller=brand&action=articleOf&brand={$brand->getIdBrand()}'>
            articles de la marque<a/>";
