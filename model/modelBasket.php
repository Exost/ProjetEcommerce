<?php

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 02/12/15
 * Time: 10:59
 */
class modelBasket
{
    static function createBasket(){ // creation du basket
        if(!isset($_SESSION['basket'])){
            $_SESSION['basket']=array();
            $_SESSION['basket']['idItem']= array();
            $_SESSION['basket']['nameModele']= array();
            $_SESSION['basket']['color']= array();
            $_SESSION['basket']['size']= array();
            $_SESSION['basket']['nbItem']= array();
            $_SESSION['basket']['priceItem']= array();

        }
        return true;
    }


    /**
     * @param $item de classe modelItem
     * @param $qteItem
     */
    static function addItem ($item, $qteItem){
        $id =$item->getIdItem();
        $name = $item->getNameMod();
        $color =$item->getSizeItem();
        $size = $item->getSizeItem();
        $price = $item->getPriceArt();
        if(createBasket()){
            //Si le produit existe déjà on ajoute seulement la quantité
            $index = array_search($id,  $_SESSION['basket']['idItem']);

            if ($index !== false)
            {
                $_SESSION['basket']['nbItem'][$index] += $qteItem ; // on incremente juste le nombre
            }else{ // on ajoute l'article
                array_push($_SESSION['basket']['idItem'],$id);
                array_push($_SESSION['basket']['nameModele'],$name);
                array_push($_SESSION['basket']['color'],$color);
                array_push($_SESSION['basket']['size'], $size);
                array_push( $_SESSION['basket']['nbItem'],$qteItem);
                array_push($_SESSION['basket']['priceItem'],$price);

            }
        }else{
            echo 'erreur ';
        }

    }


    static function delItem ($item)
    { // supprimer un Article du panier
        $id = $item->getIdItem();
        //Si le basket existe
        if (createBasket()) {
            //creation basket temporaire
            $tmp = array();
            $tmp['idItem'] = array();
            $tmp['nameModele'] = array();
            $tmp['color'] = array();
            $tmp['nbItem'] = array();
            $tmp['priceItem'] = array();
            $tmp['size'] = array();

            for ($i = 0; $i < count($_SESSION['basket']['idItem']); $i++) {
                if ($_SESSION['basket']['idItem'][$i] !== $id) {
                // si l'article n'est pas celui que l'on veut supprmier
                    // on l'ajoute au panier temporaire
                    array_push($tmp['idItem'], $_SESSION['basket']['idItem'][$i]);
                    array_push($tmp['nameModele'], $_SESSION['basket']['nameModele'][$i]);
                    array_push($tmp['color'], $_SESSION['basket']['color'][$i]);
                    array_push($tmp['size'], $_SESSION['basket']['size'][$i]);
                    array_push($tmp['nbItem'], $_SESSION['basket']['nbItem'][$i]);
                    array_push($tmp['priceItem'], $_SESSION['basket']['priceItem'][$i]);

                }

            }
            //On remplace le basket en session par notre basket temporaire à jour
            $_SESSION['basket'] = $tmp;
            // on supprime le panier temporaire
            unset($tmp);
        } else
            echo "Un problème est survenu veuillez contacter l'administrateur du site.";
    }
}