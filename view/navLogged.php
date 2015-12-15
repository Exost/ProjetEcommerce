<nav>
    <table style="width:100%;height: 2.7em ;margin:auto;">
        <tr>
            <td>
                <ul >
                    <li id="firstLeft">
                        <a href="index.php"> Acceuil </a>
                    </li>
                    <li>
                        <a href="index.php?controller=modele"> Sneakers</a> <!-- Afficher les 5 derniers modèles ajoutés -->
                    </li>
                    <li>
                        <a href="index.php?controller=category"> Categories </a>
                        <ul class="dropdown">
                            <?php // drop down menu
                            foreach(modelCategory::getAll() as $c){
                                ?>
                                <li>
                                    <a href=<?php echo "index.php?controller=category&action=read&nameCat={$c->getNameCat()}";  ?>>
                                        <?php echo $c->getNameCat();  ?>
                                    </a>
                                </li>
                            <?php }
                            ?>
                        </ul>
                    <li>
                        <a href="index.php?controller=brand" > Marques </a>
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
            </td>


            <td>
                <?php
                require ('searchBar.php'); //SearchBar
                ?>
            </td>

            <td>
                <ul>
                    <li>
                        <a href="index.php?controller=shoppingCart&action=readAll">Panier</a>
                    </li>
                    <li>
                        <a href=<?php echo "index.php?controller=user&action=read&id={$_SESSION['id']}"?> >
                            <?php echo $_SESSION['name']; ?>
                        </a>
                        <ul class="dropdown">
                            <li>
                                <a href="index.php?controller=user&action=logOut">Log Out</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </td>
        </tr>
    </table>
</nav>




<!-- <nav>

    <ul >
        <li>
            <a href=""> Shop</a>
        </li>
        <li>
            <a href=""> News</a>
        </li>
        <li>
            <a href=""> Categories </a>
        </li>
        <li>
            <a href="index.php?controller=brand" > Marques </a>
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
        <li>

        </li>

        <ul style="float: right;list-style: none">
            <li>
                <?php
                require('searchBar.php');
                ?>
            </li>
            <li><a href="index.php?controller=shoppingCart&action=readAll">Panier</a></li>
            <li>
                <a href=<?php echo "index.php?controller=user&action=read&id={$_SESSION['id']}"?> >
                    <?php echo $_SESSION['name']; ?>
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="index.php?controller=user&action=logOut">Log Out</a>
                    </li>
                </ul>

            </li>

        </ul>


    </ul>
    <p></p>
</nav> --!>