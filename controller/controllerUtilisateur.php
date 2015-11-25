<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 28/10/15
 * Time: 13:48
 */


switch ($action){
    case 'signIn':
        $view = 'SignIn';
        break;
    case 'signed':

        break;
    case 'logIn':
        break;
    case 'logOut':
        break;
}
require("{$ROOT}{$DS}view{$DS}view.php");