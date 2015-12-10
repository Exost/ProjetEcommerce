

<?php
$idModSansEspace=str_replace(' ','_',$modele->getNameMod()); // permet d'enlever les espace pour retrouver le nom des img
$img = "ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg";
$alt = "{$idModSansEspace}";
?>
<div class="setModel">
       <div>
           <figure>
               <img src=<?php echo $img;?> alt=<?php echo $alt;?> class="image">
               <figcaption>
                   <?php echo "$idModSansEspace" ?><br/>
                   <?php echo $modele->getDescMod();?><br/>
                   Prix: <?php echo $modele->getPriceMod();?><br/>
                   Marque: <?php echo "<a href='index.php?controller=brand&action=read&idBrand={$modele->getNameBrand()}'
            >{$modele->getNameBrand()}</a>"; ?>
               </figcaption>

           </figure>
       </div>
       <div>
           <?php
           if(!empty($tabItem)){
               ?>
                 <div class="blockLeft">
                     <form name='selectItem' method="post" onchange="populate(this.id,'size')"
                         action="index.php?controller=shoppingCart&action=addItem">
                         Couleur:
                         <select id="color"name="color">
                             <option value=""></option>
                             <?php
                             foreach($tabColor as $color){
                                 echo "<option value='$color[0]'>$color[0]</option>";

                             }

                             ?>
                         </select><br/>
                         taille:
                         <select  id="size" name="size">
                             <option value=""></option>
                             <?php
                             foreach($tabItem as $item){
                                 echo "<option value='{$item->getSizeItem()}'>{$item->getSizeItem()}</option>";

                             }
                             ?>
                         </select><br/>
                    <input type="submit" value="ajouter au panier">
                     </form>
                 </div><p></p>

               <?php
           }else {?>
               <div class="blockLeft">produit épuisé</div>
           <?php } ?>
       </div>



</div>




