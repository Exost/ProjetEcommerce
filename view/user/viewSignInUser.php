<form method="post" action="index.php?controller=user&action=signed">
    <fieldset>
        <legend>Inscription :</legend> <p>
            <label for="identifiant" id="label">Identifiant </label>
            <input type="text" placeholder="Ex: aLiLi" name="identifiant" id="identifiant"
                   required />
            <label for="firstname" class="label">Prenom</label>
            <input type="text" placeholder="Ex : Alice" name="firstname"
                   id="firstname"  required/></Br>
            <label for="name" id="label">Nom</label>
            <input type="text" placeholder="Ex : Toirdrol" name="name" id="name"  class="test" required />
            </Br>
        </p><p>
            <label for="age" class="label">age</label>
            <input type="number" placeholder="Ex : 19" name="age" id="age"  required /></Br>
        </p><p>
            <label for="sexe" class="label">sexe</label>
            <input type="radio" name="sexe" value="homme" id="homme" /> <label for="homme">H </label>
            <input type="radio" name="sexe" value="femme" id="femmme" /> <label for="femme">F</label>

            <label for="mail" id="label">  email</label>
            <input type="email" placeholder="Ex: alice.toirdrol@boiteAcamembert.fr" name="mail" id="email"
                   required /></Br>

            <label for="numTel" id="label"> numero de telephone</label>
            <input tupe="tel" placeholder="ex 0638224512" name="numTel" id="numTel" required />
        </p><p>

            <label for="passwd" class="label">mot de passe</label>
            <input type="password"  name="passwd" id="passwd"  required />
        </p> <p>
            <label for="passwd2" class="label">valider mot de passe</label>
            <input type="password" name="passwd2" id="mdp2" required/>
        </p><p>
            <input type="submit" value="Inscription" /> </p>
    </fieldset>
</form>