<?php

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 30/10/15
 * Time: 02:23
 */
class modelArticle extends Model
{
    private $id_Art ;
    private $id_Model ;
    private $size_Art ;
    private $color_Art ;

    static $table = "pw_Article" ;
    static $primary = "id_Art" ;


    /**
     * modelArticle constructor.
     * @param $id_Model
     * @param $id_Art
     * @param $size_Art
     * @param $color_Art
     * @param $array
     */
    public function __construct($id_Model, $id_Art, $size_Art, $color_Art, $array)
    {
        if(!is_null($id_Art) && !is_null($id_Model) && !is_null($size_Art)&& !is_null($color_Art))
        {
                $this->id_Model = $id_Model;
                $this->id_Art = $id_Art;
                $this->size_Art = $size_Art;
                $this->color_Art = $color_Art;
        }
    }

    /**
     * @return mixed
     */
    public function getIdArt()
    {
        return $this->id_Art;
    }

    /**
     * @param mixed $id_Art
     */
    public function setIdArt($id_Art)
    {
        $this->id_Art = $id_Art;
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
    public function getSizeArt()
    {
        return $this->size_Art;
    }

    /**
     * @param mixed $size_Art
     */
    public function setSizeArt($size_Art)
    {
        $this->size_Art = $size_Art;
    }

    /**
     * @return mixed
     */
    public function getColorArt()
    {
        return $this->color_Art;
    }

    /**
     * @param mixed $color_Art
     */
    public function setColorArt($color_Art)
    {
        $this->color_Art = $color_Art;
    }





}