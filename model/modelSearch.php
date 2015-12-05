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

    /**
     * @param $param
     * @return array
     * fonction which return all model, brand and category when
     * the name is like $param
     */
    public static function search($param){
        $modeles = static::searchModele($param);
        $brands = static::searchBrand($param);
        $category= static::searchCategory($param);
        $res = array();
        if(!empty($modeles) | !empty($brands) | !empty($category)){
            $res = array("modeles"=>$modeles,
                "brands"=>$brands,
                "category"=>$category);
        }

        return $res;
    }




    /**
     * @param $param
     * @return mixed
     * fonction intermediaire
     * qui regarde s'il existe un modele
     */
    private static function searchModele($param){
        $sql = 'SELECT *
                FROM pw_modele
                 WHERE name_Mod like :elem';
        try{
            $req_prep = Model::$pdo->prepare($sql);
        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }

        $req_prep->execute(array('elem'=>'%'.$param.'%'));
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelModele');
        return $req_prep->fetchAll();
    }

    /**
     * @param $param
     * @return mixed
     * idem pour Brand
     */
    private static function searchBrand ($param){
        $sql = 'SELECT *
                FROM pw_brand
                 WHERE id_Brand like :elem';
        try{
            $req_prep = Model::$pdo->prepare($sql);
        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
        $req_prep->execute(array('elem'=>'%'.$param.'%'));
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelBrand');
        return $req_prep->fetchAll();
    }

    /**
     * @param $param
     * @return mixed
     * idem pour category
     */
    private static function searchCategory ($param){
        $sql = 'SELECT *
                FROM pw_category
                 WHERE name_Cat like :elem';
        try{
            $req_prep = Model::$pdo->prepare($sql);
        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
        $req_prep->execute(array('elem'=>'%'.$param.'%'));
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelCategory');
        return $req_prep->fetchAll();
    }
 }