<form method="post" action="index.php?controller=user&action=signed">
    <fieldset>
        <legend>Inscription :</legend> <p>

            <label for="identifiant" id="label">Identifiant</label>
            <input type="text" placeholder="Exemple : Francois34" name="identifiant" id="identifiant"
                   required />
            </Br>
        </p><p>


        <label for="firstname" class="label">Nom</label>
            <input type="text" placeholder="Hollande" name="firstname"
                   id="firstname"  required/>

            <label for="name" id="label">Prénom </label>
            <input type="text" placeholder="François" name="name" id="name"  class="test" required />
            </Br>
        </p><p>

            <label for="age" class="label">age</label>
            <input type="number" placeholder="19" name="age" id="age"  required /></Br>
        </p><p>

            <label for="sexe" class="label">sexe</label>
            <input type="radio" name="sexe" value="homme" id="homme" /> <label for="homme">H </label>
            <input type="radio" name="sexe" value="femme" id="femmme" /> <label for="femme">F</label>
        </p><p>


            <label for="mail" id="label">  Email </label>
            <input type="email" placeholder="Exemple: alice.toirdrol@boiteAcamembert.fr" name="mail" id="email"
                   required />
            </Br>
        </p><p>

            <label for="adress" id="label"> Adresse </label>
            <input type="text" placeholder=" 1 Avenue des Champs Elysée" name="adress" id="adress" required />
            </Br>
        </p><p>

            <label for="numTel" id="label"> numero de telephone</label>
            <input type="tel" placeholder="0638224512" name="numTel" id="numTel" required />
        </p><p>

            <label for="passwd" class="label">mot de passe</label>
            <input type="password"  name="passwd" id="passwd"  required />
        </p> <p>

            <label for="passwd2" class="label"> Valider le mot de passe</label>
            <input type="password" name="passwd2" id="mdp2" required/>
        </p><p>

            <input type="submit" value="Inscription" /> </p>
    </fieldset>
</form>