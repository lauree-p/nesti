<div class="rc">
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="../recipes">Utilisateurs</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Création</li>
        </ol>
    </nav>

    <div class="container">

        <div class="row">

            <div class="col">

                <h1 class="mt-4 mb-4 ml-4">Edition d'un utilisateur</h1>

                <form class="form mr-5" method="POST">

                    <div class="d-flex flex-column mb-3">
                        <label style="with:100%">Nom</label>
                        <input type="text" name="name" value="<?= $user->getFirstname()?>">
                    </div>

                    <div class="d-flex flex-column mb-3">
                        <label>Prénom</label>
                        <input type="text" name="firstname" value="<?= $user->getLastname() ?>">
                    </div>

                    <div class="d-flex flex-column mb-3">
                        <label>Rôles</label>
                        <div class="checkbox">
                            <input type="checkbox" name="status"
                                <?php if (str_contains($user->getRole(), "Chef")) echo "checked";?> value="a">Chef
                            <input type="checkbox" name="status"
                                <?php if (str_contains($user->getRole(), "Modérateur")) echo "checked";?>
                                value="w">Modérateur
                            <input type="checkbox" name="status"
                                <?php if (str_contains($user->getRole(), "Administrateur")) echo "checked";?>
                                value="b">Administrateur
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-3">
                        <label>Etat</label>
                        <div class="radio">
                            <input type="radio" name="status" <?php if ($user->getState() =="Actif") echo "checked";?>
                                value="a">Actif
                            <input type="radio" name="status"
                                <?php if ($user->getState() =="En attente") echo "checked";?> value="w">En attente
                            <input type="radio" name="status" <?php if ($user->getState() =="Bloqué") echo "checked";?>
                                value="b">Bloqué
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit" action="create">Valider</button>
                    <button class="btn btn-danger" type="submit">Supprimer l'utilisateur</button>

                </form>

            </div>

            <div class="col">

                <h2 class="mt-4 mb-4 ml-4">Informations</h2>

                <div class="border-dark border p-4 mb-2">

                    <div>Date de création : <?= $user->getDateCreation() ?></div>
                    <div>Dernière Connexion : <?= $user->getDateConnection() ?></div>

                    <?php if (str_contains($user->getRole(), "Chef")) : ?>
                    <div><b>Chef Patissier</b></div>
                    <div>Nombre de recette :<?= 0 ?></div>
                    <div>Dernière recette :<?= 0 ?></div>
                    <?php endif ;?>

                    <div><b>Utilisateur</b></div>
                    <div>Nombre de commandes : <?= 0 ?></div>
                    <div>Montant total des commandes : <?= 0 ?></div>
                    <div>Dernière commandes : <?= 0 ?></div>


                    <?php if (str_contains($user->getRole(), "Administrateur")) : ?>
                    <div><b>Administrateur</b></div>
                    <div>Nombre d'importation faite : <?= 0 ?></div>
                    <div>Date de la dernière importation : <?= 0 ?></div>
                    <?php endif ;?>

                    <?php if (str_contains($user->getRole(), "Modérateur")) : ?>
                    <div><b>Modérateur</b></div>
                    <div>Nombre de commentaire bloqué : <?= 0 ?></div>
                    <div>Nombre de commentaire approuvé <?= 0 ?></div>
                    <?php endif ;?>

                </div>

                <button class="btn btn-primary w-100">Réinitialisé le mot de passe</button>
            </div>

        </div>

    </div>

    <div class="container">
        <h1 class="mt-4 mb-4 ml-4">Ses commandes</h1>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light p-0 row mb-4">
                    <form class="form-inline col-12" style="width: 100%;">
                        <input type="search" class="form-control-lg w-100" id="searchArticle"
                            placeholder="Rechercher une recette" style="font-size:inherit">
                    </form>
                </nav>
                <div class="table-responsive table-recipe">
                    <table class="table" data-toggle="table" data-sortable="true" data-pagination="true"
                        data-pagination-next-text="Next" data-search="true" data-search-selector="#searchArticle"
                        data-locale="fr-FR">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Montant</th>
                                <th scope="col">Nb d'articles</th>
                                <th scope="col">Date</th>
                                <th scope="col">Etat</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($user as $el): ?>
                            <tr>
                                <th scope="row"><?= $el->getIdRecipe() ?></th>
                                <td><?= $el->getName() ?></td>
                                <td><?= $el->getDifficulty() ?></td>
                                <td><?= $el->getPerson() ?></td>
                                <td><?= $el->formatDuration($el->getDuration()) ?></td>
                                <td><?= $el->getFirstname() . " " . $el->getLastname() ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col">
                <h2 class="mt-4 mb-4 ml-4">Détails</h2>
                <div class="border border-dark"></div>
            </div>

        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>