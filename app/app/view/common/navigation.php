<nav class="sticky-top nav-g navbar">
    <ul class="navbar-nav">
        <div class="ul-part ul-first d-flex">
            <li class="nav-item px-lg-4 m-auto <?= ($loc=='recipes')?'active':'' ?>">
                <a class="nav-link text-expanded "
                    href="<?= BASE_URL . "recipes" ?>">
                    <span class="mr-2">
                        <i class="fas fa-clipboard-list"></i>
                    </span>Recettes</a>
            </li>
            <li class="nav-item px-lg-4 m-auto <?= ($loc=='articles')?'active':'' ?>">
                <a class="nav-link text-expanded "
                    href="<?= BASE_URL .'articles' ?>">
                    <span class="mr-2">
                        <i class="fas fa-utensils"></i>
                    </span>Articles</a>
            </li>
            <li class="nav-item px-lg-4 m-auto  <?= ($loc=='users')?'active':'' ?>">
                <a class="nav-link text-expanded "
                    href="<?= BASE_URL . "users"?>">
                    <span class="mr-2">
                        <i class="fas fa-users"></i>
                    </span>Utilisateurs</a>
            </li>
            <li class="nav-item px-lg-4 m-auto  <?= ($loc=='statistiques')?'active':'' ?>">
                <a class="nav-link text-expanded"
                    href="<?= BASE_URL . "statistiques" ?>">
                    <span class="mr-2">
                        <i class="fas fa-chart-bar"></i>
                    </span>Statistiques</a>
            </li>
        </div>
        <div class="ul-part ul-second d-flex bg-light">
            <li class="nav-item px-lg-4 m-auto  <?= ($loc=='profil')?'active':''; ?>">
                <p class="nav-link text-expanded m-0 "><span class="mr-2"><i class="fas fa-user"></i></span><?= $_SESSION['firstname'].' '.$_SESSION['lastname'];?></p>
            </li>
            <li class="nav-item px-lg-4 m-auto  <?= ($loc=='logout')?'active':''; ?>">
                <a class="nav-link text-expanded "
                    href="<?php echo BASE_URL . "logout" ?>">
                    <span class="mr-2">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>Déconnexion</a>
            </li>
        </div>
    </ul>
</nav>