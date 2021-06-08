<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="../recipes">Recettes</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edition</li>
    </ol>
</nav>


<div class="container px-4">
    <div class="row gx-5">
        <div class="col">
            <h1>Edition de recette</h1>
            <form action="_POST">
                <div class="mb-3">
                    <label for="recipe_name" style="width:100%">Nom de la recette :</label>
                    <input class="border border-info rounded" type="text" style="width:100%" name="recipe_name">
                    <p class="text-secondary">Auteur de la recette : Cyril Lignac</p>
                </div>
                <div class="mb-3">
                    <label for="recipe_name" style="width: 81%;">Difficulté (note sur 5) :</label>
                    <input class="border border-info rounded" type="text" style="width: 18%;height: 3em;"
                        name="recipe_name">
                </div>
                <div class="mb-3">
                    <label for="recipe_name" style="width: 81%;">Nombre de personnes:</label>
                    <input class="border border-info rounded" type="text" style="width: 18%;height: 3em;"
                        name="recipe_name">
                </div>
                <div class="mb-3">
                    <label for="recipe_name" style="width: 81%;">Temps de préparation en minutes:</label>
                    <input class="border border-info rounded" type="text" style="width: 18%;height: 3em;"
                        name="recipe_name">
                </div>
            </form>
        </div>
        <div class="col">
            <div class="p-3">
                <div class="bg-light mb-3" style="height:300px;"></div>
                <div class="" style="width:100%">
                    <label for="recipe_name" style="width:100%">Télécharger une nouvelle image</label>
                    <div>
                        <input class="border border-info rounded" type="text" style="width:90%" name="recipe_name">
                        <button class="btn btn-success">ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light">

    <div class="container mb-5">
        <div class="row pt-4">
            <div class="col-7">
                <h2>Préparations</h2>
                <div class="d-flex mb-2 align-middle">
                    <div class="d-flex justify-content-center px-2" style="width:10%;flex-direction:column;">
                        <button class="btn-arrow d-block m-0 mb-1 btn-warning border-0 p-2"><img
                                src="..\public\images\icons\up-svg.png" height="100%" width="100%" alt=""></button>
                        <button class="btn-arrow d-block m-0 mb-2 btn-warning border-0 p-2"><img
                                src="..\public\images\icons\down-svg.png" height="100%" width="100%" alt=""></button>
                        <button class="btn-del d-block btn-danger border-0 p-2"><img
                                src="..\public\images\icons\delete-svg.png" height="100%" width="100%" alt=""></button>
                    </div>
                    <textarea cols="30" rows="5" class="bg-white border m-0 border-info rounded"
                        style="width:90%"></textarea>
                </div>
                <div class="d-flex mb-2 align-middle">
                    <div class="d-flex justify-content-center px-2" style="width:10%;flex-direction:column;">
                        <button class="btn-arrow d-block m-0 mb-1 btn-warning border-0 p-2"><img
                                src="\public\images\icons\up-svg.png" height="100%" width="100%" alt=""></button>
                        <button class="btn-arrow d-block m-0 mb-2 btn-warning border-0 p-2"><img
                                src="..\public\images\icons\down-svg.png" height="100%" width="100%" alt=""></button>
                        <button class="btn-del d-block btn-danger border-0 p-2"><img
                                src="..\public\images\icons\delete-svg.png" height="100%" width="100%" alt=""></button>
                    </div>
                    <textarea name="" id="" cols="30" rows="5" class="bg-white border m-0 border-info rounded"
                        style="width:90%"></textarea>
                </div>
                <button class="btn btn-success" style="height:50px;width: 100%"><i class="fas fa-plus"></i></button>

            </div>
            <div class="col-5 px-5">
                <h2>Liste des ingrédients</h2>

                <div class="bg-white p-2 mb-2 border" style="min-height: 290px">
                    <div class="row">
                        <div class="col-8">
                            <p>2kg de chocolat</p>
                        </div>
                        <div class="col-4">
                            <a href="">Supprimer</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>2kg de chocolat</p>
                        </div>
                        <div class="col-4">
                            <a href="">Supprimer</a>
                        </div>
                    </div>
                </div>
                <form action="_POST">
                    <div class="mb-3">
                        <label style="width:100%">Ajouter un ingrédient</label>
                        <input class="border border-info rounded" type="text" style="width:100%">
                    </div>
                    <div class="mb-3 d-flex">
                        <div>
                            <label class="mr-2" style="width:40%">Quantitée :</label>
                            <input class="border border-info rounded" type="text" style="width:20%">
                            <input class="border border-info rounded" type="text" style="width:20%">
                            <button class="btn btn-success">ok</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>