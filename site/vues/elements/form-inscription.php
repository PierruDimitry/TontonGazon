<div class="from" id="form-con">
    <h1>Inscription</h1>
    <form class="form" id="form-insc" action="/action_page.php" method="POST">
        <label> Nom
            <input type="text" placeholder="Votre nom" id="form-i-nom" name="nom" />
        </label> <label> Prénom
            <input type="text" placeholder="Votre prénom" id="form-i-prenom" name="prenom" />
        </label> <label> identifiant
            <input type="text" placeholder="L'identifiant qui vous permettra de vous connecter" id="form-i-identifiant" name="identifiant" />
        </label> <label> Adresse Mail
            <input type="email" placeholder="Votre adresse Mail" id="form-i-mail" name="mail" />
        </label> <label> Mot de passe
            <input type="password" placeholder="Votre mot de passe" id="form-i-password1" name="password1" />
        </label> <label> Vérification du Mot de passe
            <input type="password" placeholder="Vérification de votre mot de passe" id="form-i-password2" name="password2" />
        </label> <label> Adresse Ligne 1
            <input type="text" placeholder="numéro de rue, rue, avenue etc" id="form-i-address1" name="address1" />
        </label> <label> Adresse Ligne 2
            <input type="text" placeholder="apartement , porte, etage etc" id="form-i-address2" name="address2" />
        </label> <label class="2in1"> Ville
            <input type="text" placeholder="exemple : Douai" id="form-i-city" name="city" />
        </label> <label class="2in1"> Code Postal
            <input type="text" placeholder="exemple : 62300" id="form-i-postal" name="postal_code" />
        </label>

        <input class="form-submit" type="submit" value="C'est parti !" />
    </form>
    <a href="">J'ai déja un compte</a>
    <a href="">J'ai besoin d'aide</a>
</div>