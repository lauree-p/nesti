<section class="body-login">

    <img src="<?= BASE_URL; ?>/public/images/logo-nesti.png" alt="">

    <div class="login" id="container">
        <!-- zone de connexion -->

        <form action="" method="POST">
            <h1>Connexion</h1>

            <div class="ctn-pseudo">
                <label>Identifiant</label>
                <div class="ctn-form">
                    <i class="far fa-user"></i>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>
                </div>
            </div>

            <div class="ctn-password">
                <label>Mot de passe</label>
                <div class="ctn-form">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                </div>
            </div>
            <div class="ctn-submit">
                <input type="submit" id='submit' value='Valider'>
            </div>

           <?php 
                /*
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                */
            ?>
                
        </form>
    </div>

</section>