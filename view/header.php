<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="
    <?php echo "ressources{$DS}img{$DS}SneakIconXS.png"?>"/>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<link href="<?php echo "ressources{$DS}style{$DS}stylesheet.css";?>"
      rel="stylesheet" type="text/css" media="all" />
<body>
<nav class="navigation">
    <a href="index.php">
        <div class="flotte">
            <img src='ressources/img/SneakIconXS.png' alt='icone'>
        </div>
        Sneaker</a>
    <div id="menu_horizontal">
        <a href=""> Shop</a>
        <a href=""> News</a>
        <a href=""> Category</a>
        <a href="index.php?controller=brand" > Brand         </a>
        <a href="index.php?controller=modele&action=create"> New_Modele </a>

        <a href="index.php?controller=user&action=signIn">Sign In</a>
        <a href="index.php?controller=user&action=logIn">Log in</a>

    </div>
</nav>
<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/10/15
 * Time: 13:05
 */
?>