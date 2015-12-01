<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 28/10/15
 * Time: 13:48
 */
$layout ='viewVisitor'; // pour choisir la vue générique
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
        $adress = $_POST['adress'];
        if($pwd != $pwd2){
            $view="Eror";
            $error ='password different';
        }else{
            $pwd = sha1($pwd);
            $tab = array($id,$name,$fname,$age,$sexe,$mail,$numTel,$pwd,$adress);
            modelUser::insert($tab);
            echo 'done';
        }
        break;
    case 'logIn':
        $view ='Login';
        break;
    case 'logged':
        $id =$_POST['id'];
        if(modelUser::exist($id)){ // s'il existe
            $usr =modelUser::select($id);
            $pwd = sha1($_POST['passwd']);
            if($pwd == $usr->getPassword()){
                $_SESSION['id']= $usr->getIdUser();
                $_SESSION['name'] = $usr->getFirstName();
            }
        }
        $layout ='viewConnected';
        $view = 'Logged';

        break;
    case 'logOut':
        $name = $_SESSION['name'];
        session_destroy();
        $view ='LogOut';
        break;
}
require("{$ROOT}{$DS}view{$DS}{$layout}.php");