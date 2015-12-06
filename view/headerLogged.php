


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
                <a href=""> Category</a>
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
            <li>
                <a href="index.php?controller=modele&action=create"> New_Modele </a>
            </li>

            <ul style="float: right;list-style: none;">
                <li>
                    <form method="post" action="index.php?controller=search">
                        <input type="search" placeholder="search a model a brand or category?" name="the_research" />
                        <input type="submit" value="search""/>
                    </form>
                </li>
                <li>
                    <a href=<?php echo "index.php?controller=user&action=read&id={$_SESSION['id']}"?> >
                        <?php echo $_SESSION['name']; ?>
                    </a>
                    <ul class="dropdown">
                        <li><a href="index.php?controller=basket&action=readAll">basket</a></li>
                        <li>
                            <a href="index.php?controller=user&action=logOut">Log Out</a>
                        </li>
                    </ul>

                </li>

            </ul>

        </ul>
    <p></p>




</header>