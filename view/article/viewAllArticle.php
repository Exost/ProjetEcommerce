


<body>
<table class="org_table">
    <?php
    /**
     * Created by PhpStorm.
     * User: enzo
     * Date: 21/10/15
     * Time: 12:48
     */
    echo'<tr>';
    foreach($tabArticles as $a){

        $idArt =$a->getIdArt();
        echo "<td><a href='index.php?action=read&idArt={$idArt}'>";
           echo"<img src='img{$DS}article{$DS}{$idArt}.jpg' alt='{$a->getNameArt()}'
            style='width:304px;height:228px;'>
           </a>";
        foreach($a->getNameBrand() as $b)
            echo "<p></p>{$b['lib_Brand']}</td>";

    }
    echo '</tr>';
    ?>
</table>

</body>

</html>


