

<div class="table">
    <?php
    require "{$ROOT}{$DS}model{$DS}modelModele.php";
    if(!empty($tab_modele)){
        foreach ($tab_modele as $a){
            $modele = new modelModele($a['id_Mod'],$a['name_Mod'],$a['price_Mod'],
                $a['desc_Mod'],$a['name_Cat'],$a['name_Brand']);

            $nomModele = $modele->getNameMod() ;
            $nomImg = str_replace(' ','_',$nomModele);
            ?>
            <div>
                <a href=<?php echo"index.php?action=read&idMod={$modele->getIdMod()}"; ?>
                    >
                        <img
                            src=<?php echo"ressources/img{$DS}modele{$DS}{$nomImg}.jpg";?>
                            alt=<?php echo"{$modele->getNameMod()}"; ?>
                        >
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



