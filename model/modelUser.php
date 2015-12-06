<?php

require("model.php");
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 25/11/15
 * Time: 12:23
 */
class modelUser extends Model
{
    static $table = "pw_user" ;
    static $primary = "id_User" ;

    private $id_User;
    private $name;
    private $firstName;
    private $age;
    private $sexe;
    private $mail;
    private $numTel;
    private $password;
    private $adresse;
    private $state_usr;
    private $rank; //
    private $cod_Act;


    public function __construct($id_User=NULL, $name=NULL, $firstName=NULL, $age=NULL, $sexe=NULL,
                                $mail=NULL, $numTel=NULL, $password=NULL, $adress = NULL, $state=NULL
    ,$rank=NULL, $code_Act=NULL)
    {
        if(!is_null($id_User)&&!is_null($name)&&!is_null($firstName)&&!is_null($age)&&!is_null($sexe)
            &&!is_null($mail)&&!is_null($numTel)&&!is_null($password)&&!is_null($adress)
        &&!is_null($state) &&!is_null($rank) &&!is_null($code_Act)){
            $this->id_User = $id_User;
            $this->name = $name;
            $this->firstName = $firstName;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->mail = $mail;
            $this->numTel = $numTel;
            $this->password = $password;
            $this->adresse = $adress;
            $this->state_usr= $state;
            $this->rank = $rank; // rang soit user soit admin
            $this->cod_Act = $code_Act; // le code d'activation du compte envoyé par mail

        }

    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_User;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getStateUsr()
    {
        return $this->state_usr;
    }

    /**
     * @return null
     */
    public function getCodAct()
    {
        return $this->cod_Act;
    }


    /**
     * @return null
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


     static function insertUsr($tab,$id,$mail, $code){
         $res = false;
         if(self::sendMail($id,$mail,$code)){
             modelUser::insert($tab);
             $res = true;
         }
         return $res;
     }

    /**
     * @param $key
     * permet de valider le compte suite au mail
     */
    static function  validAccount($key){
        $sql ="UPDATE pw_user
                SET state_usr='Activate'
                WHERE id_User =:id";
        try{
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(":id", $key);
            $req_prep->execute();
        } catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            }die();
        }
    }


    private static function sendMail ($id,$mail,$code){

        // Génération aléatoire d'une clé



        // Insertion de la clé dans la base de données (à adapter en INSERT si besoin)

        // Préparation du mail contenant le lien d'activation
                $destinataire = $mail;
                $sujet = "Activer votre compte" ;
                $entete = "From: Sneaker.com ";

        // Le lien d'activation est composé du login(log) et de la clé(cle)
                $message = 'Bienvenue sur VotreSite,

        Pour activer votre compte, veuillez cliquer sur le lien ci dessous
        ou copier/coller dans votre navigateur internet.

        index.php?controller=user&action=activation&idUsr='.urlencode($id).'&code='.urlencode($code).'


        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre.';


                return (mail($destinataire, $sujet, $message, $entete));

        //...
        // Fermeture de la connexion
        //...
        // Votre code
        //...
    }


}