<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 02/12/2015
 * Time: 12:17
 */


echo "<img src='ressources{$DS}img{$DS}category{$DS}{$nameCat}.jpg' alt='{$nameCat}'
            style='margin-left:100px; width:55%%;height:350px;'><p></p>"; // load the image associated
echo "{$nameCat}
    </Br>
    {$category->getDescCat()}
    </Br>";
    
    </Br>";
echo "Marque: {$modele->getNameBrand()}
        <i><a href='index.php?controller=brand&action=read&idBrand={$modele->getNameBrand()}'>
           voir marque</a></i>";
?>

