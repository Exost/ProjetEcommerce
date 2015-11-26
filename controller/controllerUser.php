<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 28/10/15
 * Time: 13:48
 */
require ("{$ROOT}{$DS}model{$DS}modelUser.php");

switch ($action){
    case 'signIn':
        $view = 'SignIn';
        break;
    case 'signed':
        $id = $_POST['identifiant'];
        $name = $_POST['name'];
        $fname = $_POST['firstname'];
        $age = $_POST['age'];
        $sexe = $_POST['sexe'];
        $mail = $_POST['mail'];
        $pwd = $_POST['password'];
        $pwd2 = $_POST['password2'];
        if(modelUser::exist($id)){
            $view="Eror";
            $erreur ='Id already exists';
        }else if($pwd != $pwd2){
            $view="Eror";
            $erreur ='password different';
        }else{
            $pwd = sha1($pwd);
            $tab = array($id,$name,$fname,$age,$sexe,$mail,$pwd);
            modelUser::insert($tab);
        }
        break;
    case 'logIn':
        break;
    case 'logOut':
        break;
}
require("{$ROOT}{$DS}view{$DS}view.php");