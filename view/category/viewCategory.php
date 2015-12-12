<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 02/12/2015
 * Time: 12:17
 */


echo "<img src='ressources{$DS}img{$DS}category{$DS}{$nameCat}.jpg' alt='{$nameCat}'
            style='margin-left:100px; width:55%%;height:350px;'><p></p>"; // load the image associated
echo "Category : {$nameCat}
    </Br>
    {$category->getDescCat()}
    </Br> ";

echo "Modèles disponibles :";

print_r(  $tabModelOfCat );

foreach($tabModelOfCat as $model ) {

$idMod = $model->getIdMod();
$model =modelModele::select($idMod);
$nameModel = $model->getNameMod();
$idModSansEspace=str_replace(' ','_',$nameModel); // permet d'enlever les espace pour retrouver le nom des img

    echo " test ";
// TODO Affichage liste modèles


    /*echo "
        <div class ='prepOnglet'>
            <a href= index.php?action=read&idMod={$idMod} >
                <img src=  "ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg ?>
                     alt= "{$idModSansEspace}";?>
                    >
                <figcaption> <span>test</span></figcaption>
            </a>
            <p>
                <i>by <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$a->getNameBrand()}";?>
                        > <?php echo "{$a->getNameBrand()}";?>
                    </a></i>
            </p>
        </div>
        " ;
    */



}

?>
