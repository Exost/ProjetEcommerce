
<h1>All Category</h1>
<div class="table">
    <?php
    foreach($tabCat as $a){
        $nameCat =$a->getNameCat();
        $category =modelCategory::select($nameCat);
        //$nameModel = $model->getNameMod();
        //$idModSansEspace=str_replace(' ','_',$nameModel); // permet d'enlever les espace pour retrouver le nom des img
        ?>
        <div class ='prepOnglet'>
            <a href=<?php echo "index.php?controller=category&action=read&nameCat={$nameCat}"; ?>>
                <img src=<?php echo "ressources{$DS}img{$DS}category{$DS}{$nameCat}.jpg"; ?>
                     alt=<?php echo "{$nameCat}";?>
                    >
                <figcaption> <span><?php echo "$nameCat" ?></span></figcaption>
            </a>
            <p>

        </div>



    <?php
    /* <i>by <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$a->getNameBrand()}";?>
    > <?php echo "{$a->getNameBrand()}";?>
    </a></i>
    </p> */ // voir affichage marque d'une catégorie
    }
    ?>
</div>

