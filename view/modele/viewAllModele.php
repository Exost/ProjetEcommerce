<h1>All Models</h1>
<div class="table">
    <?php
    foreach($tabModele as $a){
        $idMod =$a->getIdMod();
        $model =modelModele::select($idMod);
        $nameModel = $model->getNameMod();
        $idModSansEspace=str_replace(' ','_',$nameModel); // permet d'enlever les espace pour retrouver le nom des img
        ?>
        <div class ='prepOnglet'>
            <a href=<?php echo "index.php?action=read&idMod={$idMod}"; ?>>
                <img src=<?php echo "ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg"; ?>
                     alt=<?php echo "{$idModSansEspace}";?>
                    >
                <figcaption> <span>test</span></figcaption>
            </a>
            <p>
                <i>by <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$a->getNameBrand()}";?>
                        > <?php echo "{$a->getNameBrand()}";?>
                    </a></i>
            </p>
        </div>



    <?php
    }
    ?>
</div>



