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

        <div class="container-fluid">
            <h1 class="mt-4 mb-4">Création d'un utilisateur</h1>
        </div>

        <div class="container">

            <form class="" method="POST">

                <div class="row">

                    <div class="col-6">

                        <div class="w-100 mb-2">
                            <label class="w-100">Nom *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="firstname" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Prénom *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="lastname" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Email *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="email" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Nom d'utilisateur *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="pseudo" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Adresse *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="adress" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Complément d'adresse *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="adress2" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Ville *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="town" required>
                        </div>

                        <div class="w-100 mb-2">
                            <label class="w-100">Code postal *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="zipe-code" required>
                        </div>

                    </div>

                    <div class="col-6">

                        <div class="w-100 mb-3">
                            <label class="w-100">Rôle(s)</label>
                            <div class="checkbox w-100 d-flex align-items-center">
                                <input class="mr-1 d-inline-block" type="checkbox" name="status" value="a" checked>Chef
                                <input class="ml-4 d-inline-block mr-1" type="checkbox" name="status"
                                    value="w">Modérateur
                                <input class="ml-4 d-inline-block mr-1" type="checkbox" name="status"
                                    value="b">Administrateur
                            </div>
                        </div>

                        <div class="w-100 mb-3">
                            <label class="w-100">Etat *</label>
                            <div class="radio w-100 d-flex align-items-center">
                                <input class="d-inline-block mr-1" type="radio" name="state" checked value="a">Actif
                                <input class="ml-4 d-inline-block mr-1" type="radio" name="state" value="w">En attente
                                <input class="ml-4 d-inline-block mr-1" type="radio" name="state" value="b">Bloqué
                            </div>
                        </div>

                        <div class="w-100 mb-3">
                            <label class="w-100">Mot de passe *</label>
                            <input style="border-width:1px" class="w-100 p-1 border-primary border-1 rounded rounded-1"
                                type="text" name="password" required id="input-password">
                            <progress class="w-100" id="pwd-strength" value="0" max="5"></progress>
                        </div>

                        <div id="password_verification" class="w-100 mb-3">
                            <div class="font-weight-bold">Votre mot de passe doit contenir : </div>
                            <div id="password_conditions">
                                <div id="pwdLength" style="color: red;"> • Au moins 12 caractères</div>
                                <div id="pwdLowCase" style="color: green;"> • Une minuscule</div>
                                <div id="pwdUpperCase" style="color: red;"> • Une majuscule</div>
                                <div id="pwdDigit" style="color: red;"> • Un chiffre</div>
                                <div id="pwdSpecial" style="color: red;"> • Un caractère spécial</div>
                            </div>
                        </div>


                        <div class="d-flex">
                            <button class="btn btn-success w-50 mr-1" type="submit" action="create">Valider</button>
                            <button class="btn btn-secondary w-50 ml-1" type="submit">Annuler</button>
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= BASE_URL ?>public/js/password-meter.js"></script>