<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 02/12/2015
 * Time: 12:17
 */

$img = "ressources{$DS}img{$DS}category{$DS}{$nameCat}.jpg";
$desc= $category->getDescCat();
?>
<figure>
    <img src='<?php  echo $img;?>' atl='<?php echo $nameCat ?>'
         style='margin-left:100px; width:55%%;height:350px;'>
    <figcaption>
        Category : <?php echo $nameCat ?><br/>
        <?php echo $desc; ?>
    </figcaption>
</figure>



<?php
echo "Marques disponibles :";

foreach($tabModelOfCat as $model ) {

    $idMod = $model->getNameMod();
    $model =modelModele::select($idMod);
$nameModel = $model->getNameMod();
$idModSansEspace=str_replace(' ','_',$nameModel); // permet d'enlever les espace pour retrouver le nom des img

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
