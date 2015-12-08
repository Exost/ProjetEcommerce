

<?php
$idModSansEspace=str_replace(' ','_',$modele->getNameMod()); // permet d'enlever les espace pour retrouver le nom des img
$img = "ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg";
$alt = "{$idModSansEspace}";
?>
<div class="block">
    <img src=<?php echo $img;?> alt=<?php echo $alt;?> class="image">
</div>
<?php
if(!empty($tabItem)){
    ?>
    <div  class="block">
    <form>
        <select  name="taille" id="category">
            <?php
            foreach($tabItem as $item){
                echo "<option value='{$item->getSizeItem()}'>{$item->getSizeItem()}</option>";

            }
            ?>
        </select>
        <select>
            <?php
            foreach($tabItem as $item){
                echo "<option value=''>{$item->getColorItem()}</option>";

            }

            ?>
        </select>
    </form>
    <?php
}else {?>
    <div class="block">produit épuisé</div>
    </div>
<?php } ?>
<p></p>
<div>
    <div><?php echo "$idModSansEspace" ?><br/> </div>
            <?php echo $modele->getDescMod();?><br/>
    Prix: <?php echo $modele->getPriceMod();?><br/>
    Marque: <?php echo "<a href='index.php?controller=brand&action=read&idBrand={$modele->getNameBrand()}'
            >{$modele->getNameBrand()}</a>"; ?>
</div>



