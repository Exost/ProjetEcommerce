<?php

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 30/10/15
 * Time: 02:23
 */
class modelItemicle extends Model
{
    private $id_Item ;
    private $id_Model ;
    private $size_Item ;
    private $color_Item ;
    private $stock_Item ;

    static $table = "pw_Itemicle" ;
    static $primary = "id_Item" ;


    /**
     * modelItemicle constructor.
     * @param $id_Model
     * @param $id_Item
     * @param $size_Item
     * @param $color_Item
     * @param $array
     */
    public function __construct($id_Model, $id_Item, $size_Item, $color_Item, $stock )
    {
        if(!is_null($id_Item) && !is_null($id_Model) && !is_null($size_Item)&& !is_null($color_Item))
        {
                $this->id_Model = $id_Model;
                $this->id_Item = $id_Item;
                $this->size_Item = $size_Item;
                $this->color_Item = $color_Item;
                $this->stock_Item = $stock ;
        }
    }

    /**
     * @return mixed
     */
    public function getIdItem()
    {
        return $this->id_Item;
    }

    /**
     * @param mixed $id_Item
     */
    public function setIdItem($id_Item)
    {
        $this->id_Item = $id_Item;
    }

    /**
     * @return mixed
     */
    public function getIdModel()
    {
        return $this->id_Model;
    }

    /**
     * @param mixed $id_Model
     */
    public function setIdModel($id_Model)
    {
        $this->id_Model = $id_Model;
    }

    /**
     * @return mixed
     */
    public function getSizeItem()
    {
        return $this->size_Item;
    }

    /**
     * @param mixed $size_Item
     */
    public function setSizeItem($size_Item)
    {
        $this->size_Item = $size_Item;
    }

    /**
     * @return mixed
     */
    public function getColorItem()
    {
        return $this->color_Item;
    }

    /**
     * @param mixed $color_Item
     */
    public function setColorItem($color_Item)
    {
        $this->color_Item = $color_Item;
    }





}