<h1>All Models</h1>
<div class="table">
    <?php
    foreach($tabModele as $a){
        $idMod =$a->getIdMod();
    ?>
        <div>
            <a href=<?php echo "index.php?action=read&idMod={$idMod}"; ?>>
                <img src=<?php echo "ressources{$DS}img{$DS}modele{$DS}{$idMod}.jpg"; ?>
                     alt=<?php echo "{$a->getNameMod()}";?>
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



