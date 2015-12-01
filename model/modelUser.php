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

    public $id_User;
    public $name;
    public $firstName;
    public $age;
    public $sexe;
    public $mail;
    public $numTel;
    public $password;
    public $adresse;

    /**
     * modelUser constructor.
     * @param $id_User
     * @param $name
     * @param $firstName
     * @param $age
     * @param $sexe
     * @param $mail
     * @param $numTel
     * @param $password
     * @param $adress
     */
    public function __construct($id_User=NULL, $name=NULL, $firstName=NULL, $age=NULL, $sexe=NULL,
                                $mail=NULL, $numTel=NULL, $password=NULL, $adress = NULL)
    {
        if(!is_null($id_User)&&!is_null($name)&&!is_null($firstName)&&!is_null($age)&&!is_null($sexe)
            &&!is_null($mail)&&!is_null($numTel)&&!is_null($password)&&!is_null($adress)){
            $this->id_User = $id_User;
            $this->name = $name;
            $this->firstName = $firstName;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->mail = $mail;
            $this->numTel = $numTel;
            $this->password = $password;
            $this->adresse = $adress;
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




}