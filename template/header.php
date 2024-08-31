<header>
    <nav>
        <a href="index.php">Retour à l'accueil</a>
        <a href="ajout_voiture.php">Ajouter une nouvelle voiture</a>
        <a href="connection.php">Se connecter</a>
        <a href="inscription.php">s'inscrire</a>
        <?php if (isset($_SESSION['user'])): ?>
        <a href="logout.php">Déconnexion</a> |
        <a href="#">Compte : <?php echo $_SESSION['user']['username']; ?></a>
        <?php else: ?>
        <a href="connection.php">Connexion</a>
        <?php endif; ?>
    </nav>

</header>