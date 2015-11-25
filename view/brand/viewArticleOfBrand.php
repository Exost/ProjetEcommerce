


<table>
    <?php
    require_once "{$ROOT}{$DS}model{$DS}modelModele.php";
    if(!empty($tab_article)){
        foreach ($tab_article as $a){
            $article = new modelArticle($a['id_Art'],$a['name_Art'],$a['price_Art'],
                $a['desc_Art'],$a['cat_Art'],$a['stock_Art'],$a['id_Marque']);

            echo "<td><a href='index.php?action=read&idArt={$article->getIdArt()}'>";
            echo"<img src='img{$DS}modele{$DS}{$article->getIdArt()}.jpg' alt='{$article->getNameArt()}'
            style='width:304px;height:228px;'>
           </a>";
            foreach($article->getNameBrand() as $b)
                echo "<p></p>{$b['lib_Brand']}</td>";

        }
        echo '</tr>';
    }
    else
        echo "<i>Actuellement aucun modele n'est proposé par cette marque</i>";

    ?>
</table>



