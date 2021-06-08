<section class="container mt-4">

    <div class="d-flex mb-4">
        <h1 class="mr-auto">Articles</h1>

    </div>

    <nav class="navbar navbar-light p-0 row mb-4">
        <form class="form-inline col-lg-8 col-sm-8 col-8" style="width: 100%;">
            <input type="search" class="form-control-lg w-100" id="searchArticle" placeholder="Rechercher un article"
                style="font-size:inherit">
        </form>
        <div class="d-flex col-12 col-lg-4 col-sm-12 justigy-content-around">
            <a class="btn btn-warning w-50 mr-1" href="<?= BASE_URL . "articles/orders" ?>" role="button">Commandes</a>
            <a class="btn btn-warning w-50 ml-1" href="<?= BASE_URL . "articles/imports" ?>" role="button">Importer</a>
        </div>
    </nav>

    <div class="table-responsive table-recipe">
        <table class="table" data-toggle="table" data-sortable="true" data-pagination="true"
            data-pagination-next-text="Next" data-search="true" data-search-selector="#searchArticle"
            data-locale="fr-FR">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix de vente</th>
                    <th scope="col">Type</th>
                    <th scope="col">Dernière Importation</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($arrayArticle as $el): ?>

                <tr>
                    <th scope="row"><?= $el->getIdArticle() ?></th>
                    <td><?= $el->getName() ?></td>
                    <td><?= $el->getPrice() ?></td>
                    <td><?= $el->getType() ?></td>
                    <td></td>
                    <td><?= $el->getStock() ?></td>
                    <td class="d-flex flex-column">
                        <a href="<?= BASE_URL ?>articles/edit">Modifier</a>
                        <a href="#" class="btn-delete-el" data-toggle="modal"
                            data-target="#modalDelete<?= $el->getIdArticle() ?>">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>

<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="<?= BASE_URL . "public/js/bootstrap-table-fr-FR.js" ?>"></script>