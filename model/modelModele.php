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
    private $id_Mod;
    private $name_Mod;
    private $price_Mod;
    private $desc_Mod;
    private $cat_Mod;
    private $stock_Mod;
    private $name_Brand;

    static $table = "pw_Modele" ;
    static $primary = "id_mod" ;
   private $array;

    /**
     * modelModicle constructor.
     * @param $id_Mod
     * @param $name_Mod
     * @param $price_Mod
     * @param $des_Mod
     * @param $cat_Mod
     * @param $stock_Mod
     * @param $name_Brand
     */
    public function __construct($id_Mod=NULL, $name_Mod=NULL, $price_Mod=NULL, $desc_Mod=NULL,
                                $cat_Mod=NULL, $stock_Mod=NULL, $name_Brand=NULL)
    {
        if(!is_null($id_Mod)&& !is_null($name_Mod)&& !is_null($price_Mod)&& !is_null($desc_Mod)&& !is_null($cat_Mod)
        && !is_null($stock_Mod) && !is_null($name_Brand)){
            $this->id_Mod = $id_Mod;
            $this->name_Mod = $name_Mod;
            $this->price_Mod = $price_Mod;
            $this->des_Mod = $desc_Mod;
            $this->cat_Mod = $cat_Mod;
            $this->stock_Mod = $stock_Mod;
            $this->name_Brand = $name_Brand;

            $this->array =  array($id_Mod,$name_Mod, $price_Mod, $desc_Mod, $stock_Mod,
                $cat_Mod, $name_Brand);
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
    public function getStockMod()
    {
        return $this->stock_Mod;
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



    public function saveModele (){
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
    }


    /**
     * @param $idMod
     * get Modicle object with an ID
     */






}