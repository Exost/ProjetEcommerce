

<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 16:41
 */
$idModSansEspace=str_replace(' ','_',$modele->getNameMod()); // permet d'enlever les espace pour retrouver le nom des img
echo "<img src='ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg' alt='{$idModSansEspace}'
            style='margin-left:100px; width:55%%;height:350px;'><p></p>"; // load the image associated
echo "{$idModSansEspace}</Br>
        {$modele->getDescMod()}</Br>";

echo "Prix: {$modele->getPriceMod()} euros</Br>";
echo "Marque: {$modele->getNameBrand()}
        <i><a href='index.php?controller=brand&action=read&idBrand={$modele->getNameBrand()}'>
           voir marque</a></i>";
?>



