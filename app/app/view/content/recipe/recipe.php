<?php

    //$session = $_SESSION['Roles'];
    //if ((is_int(strpos($session, 'Administateur')) || (is_int(strpos($session, 'Chef'))))) {

?>

<script src="<?= BASE_URL . "public/js/bootstrap-table-fr-FR.js" ?>"></script>

<section class="container mt-4">

    <div class="d-flex mb-4">
        <h1 class="mr-auto">Recettes</h1>

    </div>


    <nav class="navbar navbar-light p-0 row mb-4">
        <form class="form-inline col-lg-10 col-sm-10 col-12" style="width: 100%;">
            <input type="search" class="form-control-lg w-100" id="searchRecipe"
                placeholder="Rechercher une recette" style="font-size:inherit">
        </form>
        <a class="btn btn-warning col-12 col-lg-2 col-sm-12" href="<?= BASE_URL . "recipes/create" ?>" role="button">Ajouter une
            recette</a>
    </nav>

    <div class="table-responsive table-recipe">
        <table class="table" data-toggle="table" data-sortable="true" data-pagination="true"
            data-pagination-next-text="Next" data-search="true" data-search-selector="#searchRecipe"
            data-locale="fr-FR">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Difficulté</th>
                    <th scope="col">Pour</th>
                    <th scope="col">Temps</th>
                    <th scope="col">Chef</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($arrayRecipe as $el): ?>
                <tr>
                    <th scope="row"><?= $el->getIdRecipe() ?></th>
                    <td><?= $el->getName() ?></td>
                    <td><?= $el->getDifficulty() ?></td>
                    <td><?= $el->getPerson() ?></td>
                    <td><?= $el->formatDuration($el->getDuration()) ?></td>
                    <td><?= $el->getFirstname() . " " . $el->getLastname() ?></td>
                    <td class="d-flex flex-column">
                        <a href="<?= BASE_URL . "recipes/edit/". $el->getIdRecipe() ?>">Modifier</a>
                        <a href="#" class="btn-delete-el" data-toggle="modal"
                            data-target="#modalDelete<?= $el->getIdRecipe() ?>">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Modal -->
<?php foreach($arrayRecipe as $el): ?>
<div class="modal fade" id="modalDelete<?= $el->getIdRecipe() ?>" tabindex="-1" role="dialog"
    aria-labelledby="modalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center"><i class="fas fa-exclamation-triangle ml-2 mr-1 text-danger"></i>Voulez-vous
                    vraiment supprimer la recette : <?= $el->getName() ?> ?</div>
                <div class="text-center">Attention cette action est irréverssible !</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Confirmer</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Annuler</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php

//} else {
   // include_once(PATH_ERROR . '403.php');
//}

?>

<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="<?= BASE_URL . "public/js/bootstrap-table-fr-FR.js" ?>"></script>