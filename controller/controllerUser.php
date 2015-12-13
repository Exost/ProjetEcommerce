<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 28/10/15
 * Time: 13:48
 */
$layout ='viewVisitor'; // pour choisir la vue générique
$error ='';
require ("{$ROOT}{$DS}model{$DS}modelUser.php");

switch ($action){
    case 'signIn':
        $pagetitle='Sign In';
        $view = 'SignIn';
        break;
    case 'signed':
        $id = $_POST['identifiant'];
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
            $code = md5(microtime(TRUE)*100000);
            $tab = array($id,$name,$fname,$age,$sexe,$mail,$numTel,$pwd,$adress,'en Attente','user',$code);
            if(modelUser::insertUsr($tab,$id,$mail,$code)){
                $view='AToutFaire';
                $message ='Un mail de confirmation vient de vous être envoyé';
            }

        }
        break;
    case 'logIn':
        $pagetitle='Login';
        $view ='Login';
        break;
    case 'logged':
        if(!isset($_POST['id'])|!isset($_POST['passwd'])){ // si on n'a rien recuperer
            $view = 'Login';
            $layout = 'viewVisitor';
            $pagetitle ='Login';
        }else{
            $id =$_POST['id'];
            if(modelUser::exist($id)){ // s'il existe
                $usr =modelUser::select($id);
                if($usr->getStateUsr() == 'en Attente' ){
                    $view = 'Login';
                    $error= 'le compte n\'est pas activé';
                }
                else{
                    $pwd = sha1($_POST['passwd']);
                    if($pwd == $usr->getPassword()){
                        $_SESSION['id']= $usr->getIdUser();
                        $_SESSION['name'] = $usr->getFirstName();
                        $_SESSION['rank']= $usr->getRank();
                        if($_SESSION['rank'] == 'admin'){
                            $layout='viewAdmin';
                        }else
                            $layout ='viewConnected';
                        $view = 'Logged';
                        $pagetitle = "bonjour {$usr->getFirstName()}";

                    }
                }

            }
        }


        break;
    case 'logOut':
        if(isset($_SESSION['id'])){
            $pagetitle='Logged Out';
            $name = $_SESSION['name'];
            $view ='LogOut';
        }else{
            $pagetitle ='Login';
            $view='Login';
        }


        break;

    case 'read':
        $view='ToutFaire';
        $message=' Vous n\'êtes pas autorisé ';
        if(isset($_SESSION['id']) && $_GET['id']==isset($_SESSION['id']) ){
            $pagetitle = $_SESSION['id'];
            $view='';
            $layout ='viewConnected';
            $usr = modelUser::select($_SESSION['id']);
        }
        break;
    case 'activation':
        $view='ToutFaire';
        $pagetitle='Activation compte';
        $code = $_GET['code'];
        $id = $_GET['idUsr'];
        $usr = modelUser::select($id);
        if($code == $usr->getCodAct()){
            $message ="Bienvenue sur Sneaker {$usr->getName()}";
            $layout ='viewConnected';
            $_SESSION['id']= $usr->getIdUser();
            $_SESSION['name'] = $usr->getFirstName();

        }else
            $message ='Une erreur est survenue';
        break;
}
require("{$ROOT}{$DS}view{$DS}{$layout}.php");