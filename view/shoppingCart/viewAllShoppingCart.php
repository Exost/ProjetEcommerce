<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 13:16
 */
if(!empty($_SESSION['shoppingCart']['idItem'])){
    echo '<table>';
    echo "<tr>
            <td> taille</td>
            <td> prix</td>
            <td>couleur</td>
             </tr>";

  foreach($_SESSION['shoppingCart'] as $cart=> $shop){
      echo '<tr>';
    foreach($shop as $c =>$value){
        echo '<td>';
        echo $value;
        echo '</td>';
    }
      echo '</tr>';
  }

    echo '</table>';
  ?>

    <a href=""> commander</a>
    <?php
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