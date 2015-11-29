h<?php

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
    //private $array;

    /**
     * modelModelz constructor.
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

            //$this->array =  array($id_Mod,$name_Mod, $price_Mod, $desc_Mod, $stock_Mod,
                //$name_Cat, $name_Brand);
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


    public function getNameCat(){
        $sql = 'SELECT C.name_Cat
                FROM  pw_Categorie C
                WHERE C.id_Cat= :cat';
        try{
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cat', $this->name_Brand);
            $req_prep->execute();
        }catch (PDOException $ex) {
            if(Conf::getDebug())
                echo $ex->getMessage();
            else
                echo "une erreur est survenue";
        }
        return $req_prep;
    }



   /* public function saveModele (){
        $sql = 'INSERT INTO pw_Modele
                VALUES(id_Mod,name_Mod,price_Mod,desc_Mod,name_Cat,stock_Mod,name_Brand)
                (:id,:name,:price,:desc,:cat,:stock,:idMarque)';
        try{
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                ':id'=>$this->id_Mod,
                ':name'=>$this->name_Mod,
                ':desc'=>$this->desc_Mod,
                ':cat'=>$this->cat_Mod,
                ':stock'=>$this->stock_Mod,
                ':idMarque'=>$this->name_Brand
            );
            $req_prep->execute($values);
        }catch (PDOException $ex) {
            if(Conf::getDebug())
                echo $ex->getMessage();
            else
                echo "Une erreur est survenue veuillez recommencer la procédure ou vous réferez à'
                        . '<a href=''>Inscription</a>";
        }die();
    } */


    /**
     * @param $idMod
     * get Modicle object with an ID
     */






}