<?php

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 31/10/15
 * Time: 03:34
 */
require_once 'model.php';
class modelCategory extends Model
{
    private $name_Cat;
    private $desc_Cat;

    static $table = "pw_category" ;
    static $primary = "name_Cat" ;

    /**
     * @return mixed
     */
    public function getNameCat()
    {
        return $this->name_Cat;
    }

    /**
     * @return mixed
     */
    public function getDescCat()
    {
        return $this->desc_Cat;
    }



    public function __construct($name = NULL, $desc=NULL){
        if(!is_null($name)&& !is_null($desc)){
            $this->name_Cat = $name;
            $this->desc_Cat = $desc;
        }

    }
}