<div class="col-6 mx-auto mt-5 bg-light d-flex flex-column">
    <div class="mx-auto my-3">
        <h3>Formulaire de contact</h3>
    </div>

    <form class="mx-auto" action="formulaire-validation.php" methode="POST">
        <div class="mb-2">
            <label for="validationDefault01" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Votre Nom..." required pattern = "^[A-Za-z '-]+$" maxlength="20">
        </div>
        <div class="mb-2">
            <label for="validationDefault02" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom..." required pattern = "^[A-Za-z '-]+$" maxlength="20">
        </div>
        <div class="mb-2">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Votre adresse e-mail..." required pattern = "^[A-Za-z '-.]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
        </div>
        <div class="row">
            <label for="validationTextarea" class="form-label">Votre message</label>
            <textarea class="mb-2" name="text" style="height: 100px" placeholder="Saisissez votre message..." required></textarea>
            <button class="btn btn-primary mb-3" type="submit">Envoyer</button>
        </div>
    </form>
</div>