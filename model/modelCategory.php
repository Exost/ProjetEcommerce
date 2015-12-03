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
        //echo "( test {$this->desc_Cat} test )";
        return $this->desc_Cat;
    }



    public function __construct($name = NULL, $desc=NULL)
    {
        if(!is_null($name)&& !is_null($desc)){
            $this->name_Cat = $name;
            $this->desc_Cat = $desc;
        }

    }

    public static function getBrandOfCategory($category){

        $sql = 'SELECT *
                        FROM pw_Brand
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
                $req_prep->bindParam(':cat',$category);
                $req_prep->execute();
                $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelCategory'); // création de la catégory
                return $req_prep->fetchAll();
            }




    public static function  getModelOfCategory($category)
    {
        $sql = 'SELECT *
                        FROM pw_modele
                         WHERE name_Cat =:category';
        try
        {
            $req_prep = Model::$pdo->prepare($sql);
        }catch (PDOException $e)
            {
                if (Conf::getDebug())
                {
                    echo $e->getMessage(); // affiche un message d'erreur
                } else {
                echo 'Une erreur est survenue <a href="index.php"> retour a la page d\'accueil </a>';
            }
            die();
        }
                $req_prep->bindParam(':brand',$category);
                $req_prep->execute();
                $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelCategory'); // création de voiture
                return $req_prep->fetchAll();
    }



}