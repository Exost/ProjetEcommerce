

<!DOCTYPE html>
<html>
<?php
$title = 'sneaker';
require ("header.php");
?>

<link href="<?php echo "CSS{$DS}stylesheet.css";?>"
      rel="stylesheet" type="text/css" media="all" />
<body>
<nav class="navigation">
    <a href="index.php">
    <div class="flotte">
        <img src='img/favicon.png' alt='icone'>
    </div>
    SneakHer</a>
    <ul id="menu_horizontal">
        <li><a href=""> Shop</a></li>
        <li><a href=""> News</a> </li>
        <li><a href=""> Category</a> </li>
        <li><a href="index.php?controller=brand"> Brand</a></li>
        <li><a href="index.php?controller=utilisateur&action=signIn">Sign In</a> </li>
    </ul>
</nav>
<p></p>
<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 14/10/15
 * Time: 21:10
 */
// Si $controleur='voiture' et $view='All',
// alors $filepath=".../view/voiture/"
//       $filename="viewAllVoiture.php";
// et on charge '.../view/voiture/viewAllVoiture.php'
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}";
$filename = "view".ucfirst($view) . ucfirst($controller) . '.php';
require "{$filepath}{$filename}";
?>

</body>

</html>