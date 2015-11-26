<?php

require("model.php");
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 25/11/15
 * Time: 12:23
 */
class modelUtilisateur extends Model
{
    static $table = "pw_User" ;
    static $primary = "id_User" ;

    private $id_User;
    private $name;
    private $firstName;
    private $age;
    private $sexe;
    private $numTel;
    private $password;

    /**
     * modelUtilisateur constructor.
     * @param $id_User
     * @param $name
     * @param $firstName
     * @param $age
     * @param $sexe
     * @param $numTel
     * @param $password
     */
    public function __construct($id_User, $name, $firstName, $age, $sexe, $numTel, $password)
    {
        $this->id_User = $id_User;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->numTel = $numTel;
        $this->password = $password;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }


}