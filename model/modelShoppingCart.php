<?php

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 10:59
 */
class shoppingCart
{

    static function createBasket(){ // creation du shoppingCart
        if(!isset($_SESSION['shoppingCart'])){
            $_SESSION['shoppingCart']=array();
            $_SESSION['shoppingCart']['idItem']= array();
            $_SESSION['shoppingCart']['nameModele']= array();
            $_SESSION['shoppingCart']['color']= array();
            $_SESSION['shoppingCart']['size']= array();
            $_SESSION['shoppingCart']['nbItem']= array();
            $_SESSION['shoppingCart']['priceItem']= array();

        }
        return true;
    }


    /**
     * @param $item de classe modelItem
     * @param $qteItem
     */
    static function addItem ($item, $qteItem){
        $id =$item->getIdItem();
        $name = "modele";
        $color =$item->getSizeItem();
        $size = $item->getSizeItem();
        $price = $item->getPriceArt();
        if(self::createBasket()){
            //Si le produit existe déjà on ajoute seulement la quantité
            $index = array_search($id,  $_SESSION['shoppingCart']['idItem']);

            if ($index !== false)
            {
                $_SESSION['shoppingCart']['nbItem'][$index] += $qteItem ; // on incremente juste le nombre
            }else{ // on ajoute l'article
                array_push($_SESSION['shoppingCart']['idItem'],$id);
                array_push($_SESSION['shoppingCart']['nameModele'],$name);
                array_push($_SESSION['shoppingCart']['color'],$color);
                array_push($_SESSION['shoppingCart']['size'], $size);
                array_push( $_SESSION['shoppingCart']['nbItem'],$qteItem);
                array_push($_SESSION['shoppingCart']['priceItem'],$price);

            }
        }

    }


    static function delItem ($item)
    { // supprimer un Article du panier
        $id = $item->getIdItem();
        //Si le shoppingCart existe
        if (createBasket()) {
            //creation shoppingCart temporaire
            $tmp = array();
            $tmp['idItem'] = array();
            $tmp['nameModele'] = array();
            $tmp['color'] = array();
            $tmp['nbItem'] = array();
            $tmp['priceItem'] = array();
            $tmp['size'] = array();

            for ($i = 0; $i < count($_SESSION['shoppingCart']['idItem']); $i++) {
                if ($_SESSION['shoppingCart']['idItem'][$i] !== $id) {
                // si l'article n'est pas celui que l'on veut supprmier
                    // on l'ajoute au panier temporaire
                    array_push($tmp['idItem'], $_SESSION['shoppingCart']['idItem'][$i]);
                    array_push($tmp['nameModele'], $_SESSION['shoppingCart']['nameModele'][$i]);
                    array_push($tmp['color'], $_SESSION['shoppingCart']['color'][$i]);
                    array_push($tmp['size'], $_SESSION['shoppingCart']['size'][$i]);
                    array_push($tmp['nbItem'], $_SESSION['shoppingCart']['nbItem'][$i]);
                    array_push($tmp['priceItem'], $_SESSION['shoppingCart']['priceItem'][$i]);

                }

            }
            //On remplace le shoppingCart en session par notre shoppingCart temporaire à jour
            $_SESSION['shoppingCart'] = $tmp;
            // on supprime le panier temporaire
            unset($tmp);
        } else
            echo "Un problème est survenu veuillez contacter l'administrateur du site.";
    }
}