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
                    <li  id="firstRight">
                        <a id="basket" href="index.php?controller=shoppingCart&action=readAll">Panier</a>
                    </li>
                    <li class="liNavBar">
                        <a href="index.php?controller=user&action=signIn">Sign In</a>
                    </li>
                    <li  class="liNavBar" id ="Login">
                        <a href="index.php?controller=user&action=logIn">Log in</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</nav>


    <!-- <ul >
        <li>
            <a href="index.php"> Acceuil </a>
        </li>
        <li>
            <a href=""> News</a> <!-- Afficher les 5 derniers modèles ajoutés
        </li>
        <li>
            <a href="index.php?controller=category"> Category</a>
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
            <li class="liNavBar">
                <a href="index.php?controller=shoppingCart&action=readAll">Panier</a>
            </li>
            <li class="liNavBar">
                <a href="index.php?controller=user&action=signIn">Sign In</a>
            </li>
            <li  class="liNavBar" id ="Login">
                <a href="index.php?controller=user&action=logIn">Log in</a>
            </li>

        </ul>

    </ul>
    <p></p> -->
