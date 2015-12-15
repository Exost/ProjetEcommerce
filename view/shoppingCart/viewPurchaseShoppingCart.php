<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 15/12/15
 * Time: 12:13
 */
require_once ("{$ROOT}{$DS}model{$DS}modelShoppingCart.php");

echo "merci de votre commande {$_SESSION['name']} :)";
echo "<p></p>";
echo "commande n°1HREF89004GJIB";
$price =shoppingCart::getTotalPrice();
echo "<div>prix total de la commande : $price</div>"
?>