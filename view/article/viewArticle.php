

<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 16:41
 */
echo "<img src='img{$DS}article{$DS}{$article->getIdArt()}.jpg' alt='{$article->getNameArt()}'
            style='margin-left:100px; width:55%%;height:350px;'><p></p>"; // load the image associated
echo "{$article->getNameArt()}</Br>
        {$article->getDescArt()}</Br>";
foreach ($article->getNameCat() as $cat){
    echo "{$cat['name_Cat']}</Br>";
}
foreach($article->getNameBrand() as $b)
    echo "{$b['lib_Brand']}</Br>";
?>



