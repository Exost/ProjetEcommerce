<?php
require_once ("model.php");
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 08/12/15
 * Time: 18:33
 */
class modelItem extends Model
{

    private $id_Item;
    private $id_Modele;
    private $size_Item;
    private $color_Item;
    private $stock_item;

    /**
     * modelItem constructor.
     * @param $id_Item
     * @param $id_Modele
     * @param $size_Modele
     * @param $color_Item
     * @param $stock_item
     */
    public function __construct($id_Item=NULL, $id_Modele = NULL,
                                $size_Modele = NULL, $color_Item = NULL, $stock_item = NULL)
    {
        if(!is_null($id_Item) &&!is_null($id_Modele) &&!is_null($size_Modele) &&!is_null($color_Item)
        &&!is_null($stock_item)){
            $this->id_Item = $id_Item;
            $this->id_Modele = $id_Modele;
            $this->size_Item = $size_Modele;
            $this->color_Item = $color_Item;
            $this->stock_item = $stock_item;
        }

    }

    static function getItemByBrand($keyModele){
        $sql = 'SELECT *
                FROM pw_item
                WHERe id_Modele= :idModel';
        try{
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(':idModel', $keyModele);
            $req_prep->execute();
            $req_prep->setFetchMode(PDO::FETCH_CLASS,'modelItem');
        }catch (PDOException $e){

        }return $req_prep->fetchAll();
    }
    /**
     * @return mixed
     */
    public function getIdItem()
    {
        return $this->id_Item;
    }

    /**
     * @return mixed
     */
    public function getIdModele()
    {
        return $this->id_Modele;
    }

    /**
     * @return mixed
     */
    public function getSizeItem()
    {
        return $this->size_Item;
    }

    /**
     * @return mixed
     */
    public function getColorItem()
    {
        return $this->color_Item;
    }

    /**
     * @return mixed
     */
    public function getStockItem()
    {
        return $this->stock_item;
    }


    public function getPriceArt(){
        $sql = 'SELECT price_Mod
                FROM pw_modele
                 WHERE id_Mod =:id';
        $req_prep = Model::$pdo->prepare($sql);
        $req_prep->bindParam(':id',$this->id_Modele);
        $req_prep->execute();
        return $req_prep->fetch();


    }
}