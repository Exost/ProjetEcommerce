<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/11/15
 * Time: 23:39
 */
?>
<form method="post" action="index.php?controller=user&action=logged">
    <legend>Connection</legend>
    <fieldset>
        <label for="id" class="label"  >Identifiant</label>
        <input type="text"  name="id" required/><p></p>
        <label for="passwd" class="label"  >password</label>
        <input type="password"  name="passwd" required/><p></p>
        <input type="submit" value="connexion" /> </p>
    </fieldset>
</form>
