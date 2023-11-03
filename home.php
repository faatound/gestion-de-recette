<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

      <!-- Navigation -->
      

    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <!-- Inclusion du formulaire de connexion -->
    <?php include_once('login.php'); ?>
        <h1>Site de Recettes !</h1>

        <!-- Si l'utilisateur existe, on affiche les recettes -->

        <?php if(isset($loggedUser)): ?>
            <?php 
                 include_once ('connexion.php');
                // On récupère tout le contenu de la table recipes
                $sqlQuery = 'SELECT * FROM partage-de-recette';
                $usersStatement = $mysqlClient->prepare($sqlQuery);
                $usersStatement->execute();
                $users = $usersStatement->fetchAll();
                
                // On affiche chaque recette une à une
                foreach ($users as $user) {
                ?>
                    <p><?php echo $user['email']; ?></p>
                <?php
                }
                ?>
        
           
        <?php endif; ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>