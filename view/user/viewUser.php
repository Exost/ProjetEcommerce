<?php
    $path = "ressources/img/user/female.jpg";
    if($usr->getSexe() == 'h'){
        $path ="ressources/img/user/male.jpg";
    }
?>


<img src=<?php echo $path  ?>
    />