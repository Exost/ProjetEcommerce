<?php
require_once "{$ROOT}{$DS}config{$DS}Conf.php";

class Model{

    public static $pdo;

    public static function Init(){
        $host = conf::getHostname();
        $dbname= conf::getDataBase();
        $login= conf::getLogin();
        $pass= conf::getPassword();
        try{
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);

        }catch(PDOException $e) {
            echo $e->getMessage(); // affiche un message d'erreur
            die();}

    }



    static function select($para) {
        $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:nom_var";
        try{
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(":nom_var", $para);
            $req_prep->execute();
            $nomModel =  'model'.substr(static::$table , 3) ;
            $req_prep->setFetchMode(PDO::FETCH_CLASS, $nomModel );

                return $req_prep->fetch();;
        } catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }

    }


    public static function getAll(){
        $SQL="SELECT * FROM ".static::$table." ";
        //echo $SQL ;
        try{
            $req_prep = Model::$pdo->query($SQL);
            //print_r( $req_prep );
            $nomModel =  'model'.substr(static::$table , 3) ;
            $req_prep->setFetchMode(PDO::FETCH_CLASS, $nomModel );
            $all_Art = $req_prep->fetchAll(); ;
            return $all_Art ;
        } catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="www.google.com"> retour a la page d\'accueil </a>';
            }
            die();
        }
    }


    public static function countElem (){
        $sql = 'SELECT count(:elem) AS ResCount
                FROM '.static::$table.'';
        try{
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(':elem', static::$primary);
            $req_prep->execute();

        }catch (PDOException $e){
            if(Conf::getDebug())
                echo $e->getMessage(); // affiche un message d'erreur
            else
                echo "une erreur est survenue <a href='index.php> retour à la page d\'accueil</a>";
            die();

        }
        return $req_prep->fetch();
    }





    static function insert($objet)
    {
        $sql = "INSERT INTO " . static::$table . " "; // INSERT INTO
        /*foreach ($tab as $cle => $valeur){ // Get les noms des champs
            $sql .="".$cle.",";
        }
        $sql=rtrim($sql,",");
        $sql.=") ";
        */
        $sql .= "VALUES ("; // VALUES
        /*foreach ($tab as $cle => $valeur){ // get les valeurs des champs
            $sql .="".$valeur.",";
        }
        $sql=rtrim($sql,",");
        $sql.=") (";*/
        //echo $sql." YOLO" ;
        foreach ($objet as $cle => $valeur) { // get les binders
            $sql .= " :" . $cle . ",";
        }
        $sql = rtrim($sql, ",");
        $sql .= ") ";
        //echo $sql."SWAG";
        try {
            $req_prep = Model::$pdo->prepare($sql); // TODO BINDER LA REQUËTE
            $values = array();
            //$compteur =  0 ;
            foreach ($objet as $cle => $valeur) {
                $values[":" . $cle] = $valeur;
                //print_r( "\n" );
                //print_r( $values  ) ;
                //$compteur ++;
                //echo $compteur ;
            }
            //print_r( $req_prep );
            //print_r( $values );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href="https://infolimon.iutmontp.univ-montp2.fr/~contremoulinp/TD6/index.php"> retour a la page d\'accueil </a>';
            }
            die();
        }

    }

}

Model::Init();

?>
