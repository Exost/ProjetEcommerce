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
        echo $id;
        $name = $_POST['name'];
        $fname = $_POST['firstname'];
        $age = $_POST['age'];
        $sexe = $_POST['sexe'];
        $mail = $_POST['mail'];
        $numTel = $_POST['numTel'];
        $pwd = $_POST['passwd'];
        $pwd2 = $_POST['passwd2'];
        if($pwd != $pwd2){
            $view="Eror";
            $error ='password different';
        }else{
            $pwd = sha1($pwd);
            $tab = array($id,$name,$fname,$age,$sexe,$mail,$numTel,$pwd);
            modelUser::insert($tab);
            echo 'done';
        }
        break;
    case 'logIn':
        $view ='Login';
        break;
    case 'logged':

        break;
    case 'logOut':
        break;
}
require("{$ROOT}{$DS}view{$DS}view.php");