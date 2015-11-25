<?php
require_once 'model.php';

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 27/10/15
 * Time: 17:28
 */
class modelBrand extends Model
{
    private $id_Brand;
    private $lib_Brand;


    static $table = "pw_Brand" ;
    static $primary = "id_mod" ;

    /**
     * @return mixed
     */
    public function getIdBrand()
    {
        return $this->id_Brand;
    }

    /**
     * @return mixed
     */
    public function getLibBrand()
    {
        return $this->lib_Brand;
    }


    public function __construct($id = NULL, $lib=NULL){
        if(!is_null($id)&& !is_null($lib)){
            $this->id_Brand = $id;
            $this->lib_Brand = $lib;
        }

    }

    public static function getAllBrand (){
        $req = Model::$pdo->query("SELECT * FROM  pw_Brand");// on effectue la requete pour obtenir toutes les voitures
        $req->setFetchMode(PDO::FETCH_CLASS, 'modelBrand'); // création de voiture
        $all_user =$req->fetchAll();//on crée un tableau de voiture
        return $all_user;
    }



    public static function getBrandbyID ($id_brand){
        $sql = "SELECT * from pw_Brand WHERE id_Brand=:id";
        try {
            $req_prep = Model::$pdo->prepare($sql);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }

        $req_prep->bindParam(":id", $id_brand);
        $req_prep->execute();

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelBrand');

        // Vérifier si $req_prep->rowCount() != 0
        return $req_prep->fetch();
    }



    public static function getArticleOfBrand ($id_brand){
        $sql = 'SELECT *
                FROM pw_Article A
                WHERE A.id_Marque = :br';

        try {
            $req_prep = Model::$pdo->prepare($sql);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }

        $req_prep->bindParam(":br", $id_brand);
        $req_prep->execute();

      //   $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelArticle');

        return $req_prep->fetchAll();
    }

}