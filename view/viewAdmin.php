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
require('navAdmin.php');

$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}";
$filename = "view".ucfirst($view) . ucfirst($controller) . '.php';
require "{$filepath}{$filename}";

require('Footer.php');
?>
</body>
</html>
