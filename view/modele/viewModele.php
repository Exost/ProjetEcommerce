

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
                     <form>
                         <select  name="size">
                             <?php
                             foreach($tabItem as $item){
                                 echo "<option value='{$item->getSizeItem()}'>{$item->getSizeItem()}</option>";

                             }
                             ?>
                         </select><br/>
                         <select name="color">
                             <?php
                             foreach($tabItem as $item){
                                 echo "<option value=''>{$item->getColorItem()}</option>";

                             }

                             ?>
                         </select>
                     </form>
                 </div><p></p>

               <?php
           }else {?>
               <div class="blockLeft">produit épuisé</div>
           <?php } ?>
       </div>



</div>




