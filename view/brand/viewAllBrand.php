
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
        echo"<img src='img{$DS}brand{$DS}{$id}.jpg' alt='{$b->getIdBrand()}'
            style='width:304px;height:228px;'>
           </a></td>";

    }
    echo '</tr>';
    ?>
</table>


