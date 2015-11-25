


<table>
    <?php
    require_once "{$ROOT}{$DS}model{$DS}modelModele.php";
    if(!empty($tab_modele)){
        foreach ($tab_modele as $a){
            $modele = new modelModele($a['id_Mod'],$a['name_Mod'],$a['price_Mod'],
                $a['desc_Mod'],$a['name_Cat'],$a['stock_Mod'],$a['name_Brand']);

            echo "<td><a href='index.php?action=read&idMod={$modele->getIdMod()}'>";
            echo"<img src='img{$DS}modele{$DS}{$modele->getIdMod()}.jpg' alt='{$modele->getNameMod()}'
            style='width:304px;height:228px;'>
           </a></Br>";
          echo "{$modele->getNameBrand()}";

        }
        echo '</tr>';
    }
    else
        echo "<i>Actuellement aucun modele n'est proposé par cette marque</i>";

    ?>
</table>



