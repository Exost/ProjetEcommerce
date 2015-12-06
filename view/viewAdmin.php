<!DOCTYPE html>
<html>
<?php
require('head.php');
?>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 01/12/15
 * Time: 17:03
 */
require ('headerAdmin.php');

$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}";
$filename = "view".ucfirst($view) . ucfirst($controller) . '.php';
require "{$filepath}{$filename}";

require('Footer.php');
?>
</body>
</html>
