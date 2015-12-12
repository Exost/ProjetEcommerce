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


if(!empty($tabModelOfCat)){

    foreach ($tabModelOfCat as $m){

        $nameModele = $m->getNameMod() ;
        $nameImg = str_replace(' ','_',$nameModele);
        ?>
        <div class="slideLegend">
        <figure>
            <a href=<?php echo"index.php?action=read&idMod={$m->getIdMod()}"; ?> >
                <img class="imgModele"
                    src=<?php echo"ressources/img{$DS}modele{$DS}{$nameImg}.jpg";?>
                    alt=<?php echo"{$m->getNameMod()}"; ?> >
            </a>
            <figcaption>
                <?php echo $nameModele; ?><br/>
                <i> by <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$m->getNameBrand()}";?>
                        > <?php echo "{$m->getNameBrand()}";?>
                    </a></i>
            </figcaption>
        </figure>

            <p>

            </p>

        </div>
    <?php
    }

}
else{
    echo "<i>Actuellement aucun modèle n'est proposé dans cette catégorie </i>";

}

?>
