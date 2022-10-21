<div class="fcf-body">

    <div id="fcf-form">
        <h3 class="fcf-h3">Inscription</h3>

        <form id="fcf-form-id" class="fcf-form-class" method="post" action="inscription.traitement.php">

            <div class="fcf-form-group">
                <label for="Nom" class="fcf-label">Nom</label>
                <div class="fcf-input-group">
                    <input type="lname" id="Nom" name="nom" class="fcf-form-control" value="" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Prenom" class="fcf-label">Prenom</label>
                <div class="fcf-input-group">
                    <input type="fname" id="Prenom" name="prenom" class="fcf-form-control" value="" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Email" class="fcf-label">Email</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name="email" class="fcf-form-control" value="" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Password" class="fcf-label">Password</label>
                <div class="fcf-input-group">
                    <input type="password" id="Password" name="password" class="fcf-form-control" value="" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Image" class="fcf-label">imageUrl</label>
                <div class="fcf-input-group">
                    <input type="url" id="Image" name="image" class="fcf-form-control" value="">
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Sexe" class="fcf-label">sexe</label>
                <div class="fcf-input-group">
                    <input type="text" id="Sexe" name="sexe" class="fcf-form-control" value="" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Date" class="fcf-label">date de naissance</label>
                <div class="fcf-input-group">
                    <input type="date" id="Date" name="date" class="fcf-form-control" value="" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Signin" class="fcf-label"> <a href="connexion.php" target="_blank">Log in ?</a></label>
            </div>

            <div class="fcf-form-group">
                <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">
                    S'inscrire</button>
            </div>

            <div class="fcf-credit" id="fcf-credit">
                Simple HTML email form provided by <a href="https://www.majesticform.com" target="_blank">MajesticForm</a>
            </div>

        </form>
    </div>

</div>