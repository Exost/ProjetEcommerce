<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 13:16
 */
if(!isset($_SESSION['shoppingCart'])){
    echo "je n'existe pas";
}
else if(!empty($_SESSION['shoppingCart']['idItem'])){
    print_r($_SESSION['shoppingCart']);
}else { ?>
    <div style="text-align: center;">
        le panier est vide :(
        <p>
            <a href="index.php?action=readAll">ajouter des articles au panier?</a>
        </p>

    </div>
    <?php
}
?>