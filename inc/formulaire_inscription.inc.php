<section class="formulaire-inscription flex-center">
    <form action="#" method="post" class="flex-column">
        <label for="nom">Nom <span class="required">*</span></label>
        <input type="text" name="nom" id="nom" required>

        <label for="prenom">Prénom <span class="required">*</span></label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="description">Description</label>
        <textarea rows="5" name="description" id="description" placeholder="Décrivez-vous en quelques mots..." required></textarea>

        <label for="photoProfil">Photo de profil</label>
        <input type="file" name="photoProfil" id="photoProfil" accept="image/png, image/jpeg" />

        <label for="email">Email <span class="required">*</span></label>
        <input type="email" name="email" id="email" required>

        <label for="motDePasse">Mot de passe <span class="required">*</span></label>
        <input type="password" name="motDePasse" id="motDePasse" required>

        <label for="confirmationMotDePasse">Confirmation mot de passe <span class="required">*</span></label>
        <input type="password" name="confirmationMotDePasse" id="confirmationMotDePasse" required>

        <fieldset class="flex-column">
            <legend>Désirez-vous étre visible sur la plateforme ?</legend>
            <div>
                <input type="radio" name="brocanteurVisibilite" id="brocanteurVisible" value="oui" checked>
                <label for="brocanteurVisible">Oui</label>
            </div>
            <div>
                <input type="radio" name="brocanteurVisibilite" id="brocanteurPasVisible" value="non">
                <label for="brocanteurPasVisible">Non</label>
            </div>
            <p>Se choix peux-être à tout moment modifier dans votre profil brocanteur</p>
        </fieldset>

        <input type="submit" id="button-submit" value="M'inscrire">
    </form>
    <img src="images/gifs/giphy-determiner.gif" alt="Un icon qui est determiné" class="giphy">
</section>