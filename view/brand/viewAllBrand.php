<h1>All Brands</h1>
<div class="table">
    <?php
    foreach($tab_brand as $b){
        $id =$b->getIdBrand();
        ?>
        <div>
            <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$id}"; ?>
                >
                <img src=<?php echo"ressources{$DS}img{$DS}brand{$DS}{$id}.jpg"; ?>
                     alt=<?php echo"{$b->getIdBrand()}";?>
                     >
            </a>
        </div>

    <?php
    }
    //////

    // !! l'image est doit être en format jpg et probleme au niveau de des droits users !!!


    /// Faire gaffe au niveau des droits
    ?>

</div>


