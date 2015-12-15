<!DOCTYPE html>
<html>
<?php
    require('head.php');
    require ('header.php');
?>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 01/12/15
 * Time: 17:03
 */
    require ('navLogged.php');

$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}";
$filename = "view".ucfirst($view) . ucfirst($controller) . '.php';
require "{$filepath}{$filename}";


?>
</body>
<?php
require('Footer.php');
?>
</html>
