<head>
    <?php
        require_once "{$ROOT}{$DS}model{$DS}modelBrand.php";
        require_once "{$ROOT}{$DS}model{$DS}modelCategory.php";
    require_once "{$ROOT}{$DS}model{$DS}modelItem.php";
    ?>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="
    <?php echo "ressources{$DS}img{$DS}SneakIconXS.png"?>"/>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <link href="<?php echo "ressources{$DS}style{$DS}stylesheet.css";?>"
          rel="stylesheet" type="text/css" media="all" />

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/ angular.min.js">
      /* function populate(valSelected){


          $.ajax({
               type: 'post',
               url: 'selectOption.php',
               data: {
                   get_option: valSelected
               },
               success: function (feedback){
                   document.getElementById("size").innerHTML=feedback;
               },

              error : function(){ // en  cas d'erreur

              }
           });
           alert(val);

        } */

        function populate (val{
            document.getElementById("size").innerHTML= val;
        }
    </script>
    <title><?php echo $pagetitle; ?></title>
</head>





<?php

// src="<?php echo "ressources{$DS}style{$DS}form.js";
?>