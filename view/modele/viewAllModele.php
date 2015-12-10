<?php
require ("{$ROOT}{$DS}view{$DS}imgDefilante.php");
?>
<h1>All Models</h1>
<div class="table">
    <?php
    foreach($tabModele as $a){
        $idMod =$a->getIdMod();
        $model =modelModele::select($idMod);
        $nameModel = $model->getNameMod();
        $idModSansEspace=str_replace(' ','_',$nameModel); // permet d'enlever les espace pour retrouver le nom des img
        ?>
        <div class="slideLegend">

                <figure>
                    <a href=<?php echo "index.php?action=read&idMod={$idMod}"; ?>>
                    <img src=<?php echo "ressources{$DS}img{$DS}modele{$DS}{$idModSansEspace}.jpg"; ?>
                         alt=<?php echo "{$idModSansEspace}";?>> </a>
                    <figcaption>
                        <?php echo $nameModel; ?><br/>
                        <i>by <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$a->getNameBrand()}";?>
                                > <?php echo "{$a->getNameBrand()}";?>
                            </a></i>
                    </figcaption>
                </figure>


            <p>

            </p>
        </div>



    <?php
    }
    ?>
</div>



