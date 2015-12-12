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

        /*$idMod = $m->getIdMod() ;
        $nameMod = $m->getNameMod();
        $priceMod = $m->getPriceMod();
        $descMod = $m->getDescMod();
        $nameCat = $m->getCatMod() ;
        $nameBrand = $m->getNameBrand();

        /*$modele = new modelModele($a['id_Mod'],$a['name_Mod'],$a['price_Mod'],
            $a['desc_Mod'],$a['name_Cat'],$a['name_Brand']); */
        /* $model = new modelModele( $idMod , $nameMod , $priceMod , $descMod , $nameCat , $nameBrand);*/

        $nomModele = $m->getNameMod() ;
        $nomImg = str_replace(' ','_',$nomModele);
        ?>
        <div>
            <a href=<?php echo"index.php?action=read&idMod={$m->getIdMod()}"; ?>
                >
                <img class="imgModele"
                    src=<?php echo"ressources/img{$DS}modele{$DS}{$nomImg}.jpg";?>
                    alt=<?php echo"{$m->getNameMod()}"; ?>
                    >
            </a>
        </div>

    <?php
    }

}
else{
    echo "<i>Actuellement aucun modèle n'est proposé dans cette catégorie </i>";

}

?>
