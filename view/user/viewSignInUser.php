<form method="post" action="index.php?controller=user&action=signed">
    <fieldset>
        <legend>Inscription :</legend> <p>

            <label for="identifiant" id="label">identifiant</label>
            <input type="text" placeholder="Exemple : Francois34" name="identifiant" id="identifiant"
                   required />
            </Br>
        </p><p>


        <label for="firstname" class="label">name</label>
            <input type="text" placeholder="Hollande" name="firstname"
                   id="firstname"  required/></Br>

            <label for="name" id="label">first name </label>
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


            <label for="mail" id="label">  mail </label>
            <input type="email" placeholder="Exemple: alice.toirdrol@boiteAcamembert.fr" name="mail" id="email"
                   required />
            </Br>
        </p><p>

            <label for="adress" id="label"> adress </label>
            <input type="text" placeholder=" 1 Avenue des Champs Elysée" name="adress" id="adress" required />
            </Br>
        </p><p>

            <label for="numTel" id="label"> phone number</label>
            <input type="tel" placeholder="0638224512" name="numTel" id="numTel" required />
        </p><p>

            <label for="passwd" class="label">password</label>
            <input type="password"  name="passwd" id="passwd"  required />
        </p> <p>

            <label for="passwd2" class="label"> valide password</label>
            <input type="password" name="passwd2" id="mdp2" required/>
        </p><p>

            <input type="submit" value="sign In" /> </p>
    </fieldset>
</form>