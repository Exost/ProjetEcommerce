<?php
$path = "{$ROOT}{$DS}model{$DS}";
require ("{$path}model.php");
require ("{$path}modelBrand.php");
require ("{$path}modelModele.php");
require ("{$path}modelCategory.php");
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 30/11/15
 * Time: 22:03
 */
class modelSearch
{
    private static function searchModele($param){
        $sql = 'SELECT *
                FROM pw_modele
                 WHERE id_Mod := elem';
        try{

        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
}