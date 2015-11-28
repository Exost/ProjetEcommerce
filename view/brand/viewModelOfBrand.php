


<div clas="table">
    <?php
    require "{$ROOT}{$DS}model{$DS}modelModele.php";
    if(!empty($tab_modele)){
        foreach ($tab_modele as $a){
            $modele = new modelModele($a['id_Mod'],$a['name_Mod'],$a['price_Mod'],
                $a['desc_Mod'],$a['name_Cat'],$a['stock_Mod'],$a['name_Brand']);
        ?>
            <div>
                <a href=<?php echo"index.php?action=read&idMod={$modele->getIdMod()}"; ?>
                    >
                    <img src=<?php echo"ressources/img{$DS}modele{$DS}{$modele->getIdMod()}.jpg";?>
                         alt=<?php echo"{$modele->getNameMod()}"; ?>>
                </a>
            </div>

    <?php
        }

    }
    else{
        echo "<i>Actuellement aucun modele n'est proposé par cette marque</i>";
    }


    ?>
</div>



