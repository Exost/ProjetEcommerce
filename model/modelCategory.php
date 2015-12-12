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
        return $this->Desc_Cat;
    }



    public function __construct($name = NULL, $desc=NULL)
    {
        if(!is_null($name)&& !is_null($desc)){
            $this->name_Cat = $name;
            $this->desc_Cat = $desc;
        }

    }


    /* public static function  getModelOfCategory($category)
    {
        $sql = "SELECT *
                        FROM pw_modele
                         WHERE name_Cat =:category ";
        try {
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(':category', $category);
            $req_prep->execute();
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelModele'); // on cast les fetch en modèles
            if ($req_prep->rowCount() == 0) {
                return null;
                die();// Vérifier si $req_prep->rowCount() != 0
            } else {
                $result = $req_prep->fetchall();
                return $result;
            }
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="index.php"> retour a la page d\'accueil </a>';
            }
            die();
        }

    } */


}