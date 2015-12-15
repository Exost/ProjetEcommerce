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
            <th>nom du modele</th>
            <th>couleur</th>
            <th>taille</th>
            <th>nombre</th>
            <th>prix du modele</th>
           </tr>";
    $table .= "<tr>";
    foreach($_SESSION['shoppingCart']['nameModele'] as $name){
        $nameSansEspace=str_replace(' ','_',$name[0]);
        $id =$_SESSION['shoppingCart']['idMod'][0];
        $table .= "<td>
                    <a href='index.php?action=read&idMod=$id'><img src='ressources{$DS}img{$DS}modele{$DS}$nameSansEspace.jpg'
style='width: 70px'/></a></td>";
    }
    foreach($_SESSION['shoppingCart']['color'] as $color){
        $table .= "<td>$color</td>";
    }
    foreach($_SESSION['shoppingCart']['size'] as $size){
        $table .= "<td>$size</td>";
    }

    foreach($_SESSION['shoppingCart']['nbItem'] as $nb){
        $table .= "<td>$nb</td>";
    }

    foreach($_SESSION['shoppingCart']['priceItem'] as $price){
        $table .= "<td>{$price[0]}</td>";
    }

    $table .= '</tr>';

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