<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
</head>
<body>
<?php
$title = 'sneaker';
require ("header.php");
?>
<p></p>
<form method="post" action="index.php?controller=search">
    <input type="search" placeholder="search a model a brand or category?" />
    <input type="submit" value="search""/>
</form>

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

<?php
require ('Footer.php');
?>