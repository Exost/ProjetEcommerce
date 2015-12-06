<header class="navigation">
    <a href="index.php">
        <div class="flotte">
            <img src='ressources/img/SneakIconXS.png' alt='icone'>
        </div>
        Sneaker</a>
    <ul >
        <li>
            <a href=""> Shop</a>
        </li>
        <li>
            <a href=""> News</a>
        </li>
        <li>
            <a href="index.php?controller=category"> Category</a>
        </li>
        <li>
            <a href="index.php?controller=brand" > Brands </a>
            <ul class="dropdown">
                <?php // drop down menu
                foreach(modelBrand::getAll() as $b){
                    ?>
                    <li> <a href=<?php echo "index.php?controller=brand&action=read&idBrand={$b->getIdBrand()}";  ?>>
                            <?php echo $b->getIdBrand();  ?>
                        </a>
                    </li>
                <?php }
                ?>
            </ul>
        </li>
        <ul style="float: right;list-style: none;">
            <li>
                <?php
                    require ('searchBar.php');
                ?>
            </li>
            <li>
                <a href="index.php?controller=user&action=signIn">Sign In</a>
            </li>
            <li>
                <a href="index.php?controller=user&action=logIn">Log in</a>
            </li>

        </ul>

    </ul>
    <p></p>

</header>

<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 13:05
 */
?>