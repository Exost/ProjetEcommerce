<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 13:16
 */
if(!empty($_SESSION['shoppingCart']['idItem'])){
    $table="<table style='border:solid 1px'>";
    $table .="<tr style='border: solid 2px red'>
            <th> id</th>
            <th>nom du modele</th>
            <th>couleur</th>
            <th>taille</th>
            <th>nombre</th>
            <th>prix du modele</th>
           </tr>";
    $table .= "<tr>";
  foreach($_SESSION['shoppingCart'] as $cart=> $shop){
       //
    foreach($shop as $c =>$value){
        if(is_array($value)){ // un problme de requete
            $table .= "<td>";
            $table .= $value[0];
            $table .="</td>";

        }else{
            $table .= "<td>$value</td>";
        }

    }//

  }$table .= '</tr>';

    $table .= '</table>';
    echo $table;

    echo "prix total";
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