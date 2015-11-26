
<table class="org_table">
    <?php
    /**
     * Created by PhpStorm.
     * User: enzo
     * Date: 27/10/15
     * Time: 18:24
     */
    echo'<tr>';
    foreach($tab_brand as $b){

        $id =$b->getIdBrand();
        echo "<td><a href='index.php?controller=brand&action=read&idBrand={$id}'>";
        echo"<img src='ressources{$DS}img{$DS}brand{$DS}{$id}.jpg' alt='{$b->getIdBrand()}'
            style='width:304px;height:228px;'>
           </a></td>";

    }
    echo '</tr>';


    //////

    // !! l'image est doit être en format jpg et probleme au niveau de des droits users !!!


    /// Faire gaffe au niveau des droits
    ?>

</table>


