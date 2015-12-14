<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 14/12/15
 * Time: 14:20
 */
include "{$ROOT}{$DS}config{$DS}conf.php";
echo '<option>yolo</option>';
echo "<option>{$_POST['color']}</option>";

mysql_connect('localhost','enzo','');
mysql_select_db('Sneaker');
$sql = 'SELECT size_Item
                FROM pw_item
                WHERE id_Modele = :mod AND
                      color_Item = :color';
$requete = mysqli_prepare($sql);
$array =array(
    ':mod'=> $idMod,
    ':color'=> $color,
);
$requete->bind_param(':mod',$_POST['id_mod']);
$requete->bind_param(':color',$_POST['color']);
$requete->execute();

//$req_prep = Model::$pdo->prepare($sql);






    //$req_prep->execute($array);
//$req_prep->fetchAll();

echo "<option>{$_POST['id_mod']}</option>";

?>