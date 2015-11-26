<table class="org_table">
    <?php
    /**
     * Created by PhpStorm.
     * User: enzo
     * Date: 21/10/15
     * Time: 12:48
     */
    echo'<tr>';
    foreach($tabModele as $a){
        $idMod =$a->getIdMod();
        echo "<td><a href='index.php?action=read&idMod={$idMod}'>";
           echo"<img src='ressources{$DS}img{$DS}modele{$DS}{$idMod}.jpg' alt='{$a->getNameMod()}'
            style='width:304px;height:228px;'>
           </a>";
        echo "</Br><i>by <a href='index.php?controller=brand&action=read&idBrand={$a->getNameBrand()}'>
            {$a->getNameBrand()}</a></i>";

    }
    echo '</tr>';
    ?>
</table>



