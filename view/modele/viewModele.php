

<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 16:41
 */
echo "<img src='img{$DS}modele{$DS}{$modele->getIdMod()}.jpg' alt='{$modele->getNameMod()}'
            style='margin-left:100px; width:55%%;height:350px;'><p></p>"; // load the image associated
echo "{$modele->getNameMod()}</Br>
        {$modele->getDescMod()}</Br>";

echo "Prix: {$modele->getPriceMod()} euros</Br>";
echo "Marque: {$modele->getNameBrand()}
        <i><a href='index.php?controller=brand&action=read&idBrand={$modele->getNameBrand()}'>
           voir marque</a></i>";
?>



