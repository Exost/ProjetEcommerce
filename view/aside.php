<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 14/12/15
 * Time: 22:19
 */
require_once ("{$ROOT}{$DS}model{$DS}modelItem.php");
require_once("{$ROOT}{$DS}model{$DS}modelModele.php");
?>

<p></p>
<aside>

    <h2>Filtres </h2>


            <h3>Taille</h3>

                <?php
                    foreach(modelItem::getAll() as $item){
                        echo "<br/><a href=
'index.php?action=filterBySize&size={$item->getSizeItem()}'>{$item->getSizeItem()}</a>";
                    }
                ?>

            <p></p>

            <h3>Prix</h3>

                <?php
                foreach(modelModele::getAll() as $modele){
                    echo "<br/><a href='index.php?action=filterByPrice&price={$modele->getPriceMod()}'>{$modele->getPriceMod()}</a>";
                }
                ?>


</aside>


