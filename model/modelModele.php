<?php

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 21/10/15
 * Time: 12:12
 */

require_once ('model.php');
class modelModele extends Model
{
    public $id_Mod;
    public $name_Mod;
    public $price_Mod;
    public $desc_Mod;
    public $name_Cat;
    public $name_Brand;

    static $table = "pw_modele" ;
    static $primary = "id_Mod" ;


    /**
     * modelModele constructor.
     * @param $id_Mod
     * @param $name_Mod
     * @param $price_Mod
     * @param $desc_Mod
     * @param $name_Cat
     * @param $stock_Mod
     * @param $name_Brand
     */
    public function __construct($id_Mod=NULL, $name_Mod=NULL, $price_Mod=NULL, $desc_Mod=NULL,
                                $name_Cat=NULL , $name_Brand=NULL)
    {
        if(!is_null($id_Mod)&& !is_null($name_Mod)&& !is_null($price_Mod)&& !is_null($desc_Mod)&& !is_null($name_Cat) && !is_null($name_Brand)){
            $this->id_Mod = $id_Mod;
            $this->name_Mod = $name_Mod;
            $this->price_Mod = $price_Mod;
            $this->desc_Mod = $desc_Mod;
            $this->name_Cat = $name_Cat;

            $this->name_Brand = $name_Brand;


        }

    }


    /**
     * @return mixed
     */
    public function getIdMod()
    {
        return $this->id_Mod;
    }

    /**
     * @return mixed
     */
    public function getNameMod()
    {
        return $this->name_Mod;
    }

    /**
     * @return mixed
     */
    public function getPriceMod()
    {
        return $this->price_Mod;
    }

    /**
     * @return mixed
     */
    public function getDescMod()
    {
        return $this->desc_Mod;
    }

    /**
     * @return mixed
     */
    public function getCatMod()
    {
        return $this->cat_Mod;
    }

    /**
     * @return mixed
     */
    public function getNameBrand()
    {
        return $this->name_Brand;
    }

    public static function getModelOfCat($cat){
        $sql = 'SELECT *
                FROM pw_modele
                 WHERE name_Cat =:cat';
        try{
            $req_prep = Model::$pdo->prepare($sql);
        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="index.php"> retour a la page d\'accueil </a>';
            }
            die();
        }
        $req_prep->bindParam(':cat',$cat);
        $req_prep->execute();
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelModele'); //transforme les row en objet
        return $req_prep->fetchAll();
    }








}