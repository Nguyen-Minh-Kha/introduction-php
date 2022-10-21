<div class="fcf-body">

    <div id="fcf-form">
        <h3 class="fcf-h3">Ajoutez une nouvelle recette</h3>

        <form id="fcf-form-id" class="fcf-form-class" method="post" action="nouvelleRecette.traitement.php">

            <div class="fcf-form-group">
                <label for="Title" class="fcf-label">title</label>
                <div class="fcf-input-group">
                    <input type="text" id="title" name="title" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Description" class="fcf-label">description</label>
                <div class="fcf-input-group">
                    <textarea id="Description" name="description" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Image" class="fcf-label">image url</label>
                <div class="fcf-input-group">
                    <input type="url" id="Image" name="image" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Difficulty" class="fcf-label">difficulté</label>
                <div class="fcf-input-group">
                    <input type="number" id="Difficulty" name="difficulty" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Price" class="fcf-label">prix</label>
                <div class="fcf-input-group">
                    <input type="text" id="Price" name="price" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Author" class="fcf-label">Auteur</label>
                <div class="fcf-input-group">
                    <input type="text" id="Author" name="author" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="Likes" class="fcf-label">Likes</label>
                <div class="fcf-input-group">
                    <input type="text" id="Likes" name="likes" class="fcf-form-control" required>
                </div>
            </div>


            <div class="fcf-form-group">
                <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">
                    Créer une nouvelle recette</button>
            </div>

            <div class="fcf-credit" id="fcf-credit">
                Simple HTML email form provided by <a href="https://www.majesticform.com" target="_blank">MajesticForm</a>
            </div>

        </form>
    </div>

</div>