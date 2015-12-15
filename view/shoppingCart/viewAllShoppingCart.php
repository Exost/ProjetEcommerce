<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 13:16
 */
require_once ("{$ROOT}{$DS}model{$DS}modelShoppingCart.php");
if(!empty($_SESSION['shoppingCart']['idItem'])){
    $table="<table style='position: relative;border:solid 1px'>";
    $table .="<tr style='border: solid 2px red'>
            <th>nom du modele</th>
            <th>couleur</th>
            <th>taille</th>
            <th>prix du modele</th>
            <th>quantité</th>
           </tr>";
    $table .= "<tr>";
    for($i=0;$i< count($_SESSION['shoppingCart']['idItem']); $i++){
        $table .= "<tr>";
        $idItem =$_SESSION['shoppingCart']['idItem'][$i];
        $name =$_SESSION['shoppingCart']['nameModele'][$i];
        $nameSansEspace=str_replace(' ','_',$name[0]);
        $price=$_SESSION['shoppingCart']['priceItem'][$i];
        $nbItem =$_SESSION['shoppingCart']['nbItem'][$i];
        $color =$_SESSION['shoppingCart']['color'][$i];
        $size = $_SESSION['shoppingCart']['size'][$i];
        $table .= "<td>
                    <figure>
                    <img src='ressources{$DS}img{$DS}modele{$DS}$nameSansEspace.jpg'
                     style='width: 70px'/>
                     <figcaption>
                        $name[0]
                    </figcaption>
                    </figure>

                    </td>";
        $table .= "<td>$color</td>";
        $table .= "<td>$size</td>";
        $table .= "<td>{$price[0]}</td>";
        $table .= "<td><div style='float: left'>$nbItem</div>";
        $table .= "<form method='post' style='float: right;' action='index.php?controller=shoppingCart&action=delete&idItem=$idItem'>
        <input type='submit' value='-'>
           </form>";
        $table .="</td>";
        $table .= '</tr>';
    }







    $table .= '</table>';
    echo $table;
    $prixTot = shoppingCart::getTotalPrice();
    echo "<div style='text-align: right; padding-right: 5%;'>prix total :$prixTot</div>";
  ?>

    <br/>

    <a href="index.php?controller=shoppingCart&action=purchase"> commander</a>
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