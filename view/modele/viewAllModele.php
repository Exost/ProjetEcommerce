<h1>All Models</h1>
<div class="table">
    <?php
    foreach($tabModele as $a){
        $idMod =$a->getNameMod();
        $idModSansEspace=str_replace(' ','_',$idMod); // permet d'enlever les espace pour retrouver le nom des img
        ?>
        <div>
            <a href=<?php echo "index.php?action=read&idMod={$idModSansEspace}"; ?>>
                <img src=<?php echo "ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg"; ?>
                     alt=<?php echo "{$idModSansEspace}";?>
                    ></a>
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



