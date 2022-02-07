<div class="container-fluid bg-light vh-100 bg-dark d-flex">
    <form action="" method="POST" class="text-light col-4 offset-4 my-auto border-light d-flex flex-column">
        <div class="mx-auto">
            <i class="fas fa-lock"></i>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Identifiant</label>
            <input type="email" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">Indiquez l'adresse mail avec laquelle vous vous êtes inscrit.</div>
        </div>
        <div>
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-5 justify-content-end">
            <p><a href="#" role="button">Mot de passe oublié</a></p>
        </div>


        <?php
        if (isset($_POST['password']) && $_POST['password'] != $password) {
        ?><div class="alert alert-danger" role="alert">
                Mot de passe incorrect
            </div><?php
                }
                    ?>



        <button type="submit" name="buttonAccess" class="btn btn-primary">Valider</button>
    </form>
</div>