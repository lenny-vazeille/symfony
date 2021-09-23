<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-up</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/form.css">
        <link rel="stylesheet" href="../librairy/animsition/dist/css/animsition.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../librairy/animsition/dist/js/animsition.min.js"></script>    
    </head>

    <body>
        
        <header>
            <h1 class="title">Symfony Blog</h1>            
            <a class="retour animsition-link" href="../index.php">Accueil</a>
        </header>

        <section class="animsition">
            <h1 class="title_o">Inscription</h1>
            <p>- Veuillez renseigner les champs -</p>
            <form class="bckg_form_signup" action="" method="POST">
                <input type="text" placeholder="Nom" required>
                <input type="text" placeholder="Prenom" required>
                <input type="date" placeholder="Date de naissance" required>
                <input type="email" placeholder="Mail" required>
                <input type="password" placeholder="Mot de passe" required>
                <input type="password" placeholder="Vérification Mdp" required>

                <button type="submit" placeholder="Envoyer"><p>Envoyer</p></button>
            </form>

            <!-- BOTTOM - right -->
            <div class="circle"></div>
        </section>    
        
        <script src="../js/my_animsition.js"></script>    

    </body>
</html>