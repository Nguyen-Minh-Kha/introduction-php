<nav class="navbar navbar-expand-lg bg-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="acceuil.php" style="color:white">Acceuil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="acceuil.php" style="color:white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="popularity.php" style="color:white">Les Plus populaire</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color:white">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="color:white">Contact</a>
                </li>

                <!-- 
                    check if session is set or not
                    if set -> show user
                    if not -> show connexion
                -->
                <?php
                if (
                    array_key_exists('userNom', $_COOKIE) && !empty($_COOKIE['userNom'])
                    && array_key_exists('userPrenom', $_COOKIE) && !empty($_COOKIE['userPrenom'])
                    && array_key_exists('userEmail', $_COOKIE) && !empty($_COOKIE['userEmail'])
                ) {

                ?>

                    <li class="nav-item">
                        <a class="nav-link" href="nouvelleRecette.php" style="color:white">Nouvelle Recette</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" style="color:white"><?php echo ($_COOKIE['userNom'] . " " . $_COOKIE['userPrenom']); ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="deconnexion.php" style="color:white">Deconnexion</a>
                    </li>

                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php" style="color:white">Connexion</a>
                    </li>
                <?php
                }
                ?>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>