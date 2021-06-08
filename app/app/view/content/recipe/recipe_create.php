<div class="rc">
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="../recipes">Recettes</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Création d'une recette</li>
        </ol>
    </nav>

    <div class="container">

        <div class="container-fluid">
            <h1 class="mt-4 mb-4 ml-4">Création d'une recette</h1>
            <div class="d-flex justify-content-around mb-2 nbrBtnSteps">
                <div class="d-flex flex-column align-items-center">
                    <div class="nbrBtnStep d-flex rounded-circle align-middle justify-content-center mb-1"
                        style="height: 2em;width:2em;" id="nbr-step1">
                        <p class="m-auto p-0 text-light">1</p>
                    </div>
                    <p class="m-0">Création</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="nbrBtnStep d-flex rounded-circle align-middle justify-content-center mb-1"
                        style="height: 2em;width:2em;" id="nbr-step2">
                        <p class="m-auto p-0 text-light">2</p>
                    </div>
                    <p class="m-0">Ingrédients</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="nbrBtnStep d-flex rounded-circle align-middle justify-content-center mb-1"
                        style="height: 2em;width:2em;" id="nbr-step3">
                        <p class="m-auto p-0 text-light">3</p>
                    </div>
                    <p class="m-0">Préparation</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="nbrBtnStep d-flex rounded-circle align-middle justify-content-center mb-1"
                        style="height: 2em;width:2em;" id="nbr-step4">
                        <p class="m-auto p-0 text-light">4</p>
                    </div>
                    <p class="m-0">Validation</p>
                </div>
            </div>
            <div class="progress mb-4">
                <div class="progress-bar" id="progress-recipe-create" role="progressbar" aria-valuenow="33.33"
                    aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
            </div>
        </div>

        <!-- Etape 1 -->


        <section class="container-fluid step" id="rc-step1">
            <div class="container mb-4">
                <h2 class="mb-4">Etape 1 : Création de la recette</h2>
                <div class="row">
                    <div class="col-lg col-xs-12">
                        <div class="mb-3">
                            <label for="recipe_name" style="width:100%">Nom de la recette * :</label>
                            <input autofocus id="recipe-name"
                                class="border border-info rounded input-step1 form-control" type="text"
                                style="width:100%;height: 2.5em" name="recipe_name">
                            <div id="validationStep1Name" class="invalid-feedback">Veuillez saisir un nom de recette
                                valide
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="recipe_difficulty" style="width: 81%;">Difficulté (note sur 5) * :</label>
                            <input id="recipe-difficulty"
                                class="border border-info rounded input-step1 form-control input-nb" type="number"
                                min="1" max="5" style="width: 20%;height: 2.5em;" name="recipe_difficulty">
                        </div>
                        <div class="mb-3">
                            <label for="recipe_nbPerson" style="width: 81%;">Nombre de personnes * :</label>
                            <input id="recipe-nbPerson"
                                class="border border-info rounded input-step1 form-control input-nb" type="number"
                                min="1" max="100" style="width: 20%;height: 2.5em;" name="recipe_nbPerson">
                        </div>
                        <div class="mb-3">
                            <label for="recipe_duration" style="width: 81%;">Temps de préparation en minutes * :</label>
                            <input id="recipe-duration"
                                class="border border-info rounded input-step1 form-control input-nb" type="number"
                                min="1" max="500" style="width: 20%;height: 2.5em;" name="recipe_duration">
                        </div>
                    </div>
                    <div class="col-lg col-xs-12">
                        <div class="d-flex justify-content-center w-100 p-2 mb-2">
                            <div class="bg-light border"
                                style="height:250px;width:80%;background-size: cover;background-repeat: no-repeat;background-position: center;"
                                id="image-preview"></div>
                        </div>
                        <div class="mb-3" style="width:80%;margin-left: 3.5em">
                            <label for="recipe_name" style="width:50%">Ajouter une image :</label>
                            <div>
                                <input id="recipe-img" class="border border-info rounded input-step1" type='file'
                                    id="imageUpload" accept=".png, .jpg, .jpeg" name="recipe_name" style="width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" disabled="true" id="btn-step1">Valider et passer à l'étape
                        suivante</button>
                    <button id="btn-cancel-step1" class="btn btn-danger">Annuler</button>
                </div>

            </div>
        </section>

        <!-- Etape 2 -->

        <section class="container-fluid pb-4 step" id="rc-step2">
            <div class="container">
                <h2 class="mb-4">Etape 2 : Ajouter des ingrédients</h2>

                <div class="row">

                    <div class="col-lg-6 col-xs-12">
                        <label style="margin-bottom: .5rem">Liste d'ingrédients</label>
                        <div id="ingredient-list" class="bg-white p-2 mb-2 border border-dark"
                            style="min-height: 3rem;">
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12">

                        <div class="row">

                            <div class="col-12">
                                <label style="width:100%">Ajouter un ingrédient</label>
                                <input id="ingredient-name" class="border border-info rounded input-ingredient mb-2"
                                    type="text" style="width:100%;height:2.5rem">
                            </div>

                            <div class="col-6">
                                <label style="width:100%" class="">Quantitée :</label>
                                <input id="ingredient-nbr" class="border border-info rounded input-ingredient input-nb"
                                    type="number" style="width:100%;height:2.5rem" min="1" max="10000">
                            </div>

                            <div class="col-6">
                                <label style="width:100%" class="">Unitée :</label>
                                <select id="ingredient-unity"
                                    class="form-control border input-ingredient border-info rounded"
                                    style="width:100%;height: 2.5rem">
                                    <option selected></option>
                                    <option>kg</option>
                                    <option>g</option>
                                    <option>mg</option>
                                    <option>l</option>
                                    <option>cl</option>
                                    <option>mil</option>
                                    <option>cuillères</option>
                                    <option>cuillières à café</option>
                                    <option>cuillères à soupe</option>
                                    <option>paquet</option>
                                    <option>pot</option>
                                    <option>pots</option>
                                    <option>zeste</option>
                                    <option>petit bouquet</option>
                                    <option>aucune</option>
                                </select>
                            </div>

                            <div class="col-12 d-flex align-items-end mt-2">
                                <button style="width:100%;height:2.5rem" id="btn-add-ingredients"
                                    class="btn btn-success" disabled="true">Ajouter</button>
                            </div>

                        </div>
                    </div>

                </div>

                <hr>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-warning" id="btn-step2P">Etape précédente</button>
                    <button class="btn btn-success" id="btn-step2" disabled="true">Valider et passer à l'étape
                        suivante</button>
                    <button class="btn btn-danger" id="btn-cancel-step2">Annuler</button>
                </div>

            </div>
        </section>

        <!-- Etape 3 -->

        <section class="container-fluid step" id="rc-step3">
            <div class="container mb-4">
                <h2 class="mb-4">Etape 3 : Ajouter des étapes de préparation</h2>
                <div class="w-100 mb-4 border p-2">
                    <div id="prepares" class="d-flex flex-column w-100"></div>
                    <button id="btn-add-prepare" class="btn btn-success" style="height:50px;width: 100%"><i
                            class="fas fa-plus"></i></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-warning" id="btn-step3P">Etape précédente</button>
                    <button class="btn btn-success" id="btn-step3">Valider et passer à l'étape
                        suivante</button>
                    <button class="btn btn-danger">Annuler</button>
                </div>
            </div>
        </section>

        <!-- Etape 4 -->

        <section class="container-fluid step" id="rc-step4">
            <div class="container mb-4">
                <h2 class="mb-4">Etape 4 : Valider votre recette</h2>
                <h3 class="mb-4 text-center text-muted">Votre recette en détail</h3>
                <form method="POST" action="valid">
                    <div class="mt-3 d-flex justify-content-center ">
                        <div class="col col-lg-6 col-md-8 col-sm-10 border p-3">
                            <div class="mb-2 text-center" for="recipe_name" style="width:100%;font-size:1.5rem"
                                id="valid-recipe-name"></div>

                            <div class="d-flex justify-content-center flex-column w-100 mb-2">
                                <div class="d-flex justify-content-center">
                                    <div id="valid-image-preview" class="bg-light border mb-2"
                                        style="height:250px;width:80%;background-repeat:no-repeat;background-size:cover;background-position: center center;">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around mb-3 align-self-center" style="width:80%">
                                    <div id="valid-recipe-difficulty"></div>
                                    <div id="valid-recipe-nbPerson"></div>
                                    <div id="valid-recipe-duration"></div>
                                </div>
                            </div>
                            <div class="mb-2" style="font-size:1.3rem">Ingrédients</div>
                            <div class="bg-white p-2 border d-flex mb-3">
                                <ul id="valid-list-ingredient" class="w-100 p-2 mb-0"></ul>
                            </div>
                            <div class="mb-3" style="font-size:1.3rem">Préparation</div>
                            <ul id="valid-list-prepare" class="pl-0"></ul>
                            <hr>

                            <input id="input-name-recipe" name="name" type="hidden">
                            <input id="input-difficulty" name="difficulty" type="hidden">
                            <input id="input-nbperson-recipe" name="nbperson" type="hidden">
                            <input id="input-duration-recipe" name="duration" type="hidden">
                            <input id="input-img-recipe" name="img" type="hidden">
                            <input id="input-ingredients-recipe" name="ingredients" type="hidden">
                            <input id="input-prepares-recipe" name="prepares" type="hidden">

                            <div class="d-flex justify-content-between">
                                <a class="btn btn-warning text-ligth" id="btn-step4P">Etape précédente</a>
                                <button type="submit" class="btn btn-success" id="btn-step4">Valider la recette</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </section>



        <!-- Etape 5 -->

        <section class="container-fluid pt-4 step" id="rc-step5">
            <div class="container mb-4">
                <h2 class="mb-4 text-center">Nouvelle recette ajoutée !</h2>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-success" id="btn-back" href="<?= BASE_URL . "recipes" ?>">Retour à la liste des
                        recette</a>
                </div>
            </div>
        </section>

    </div>

</div>

<script src="<?= BASE_URL . "public/js/recipe-create.js" ?>"></script>