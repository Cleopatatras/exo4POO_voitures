<?php


require_once 'config/DbConnection.php';
require_once 'config/session.php';

$voiture_id = $_GET['voiture_id'];

//$pdo = new PDO("mysql:host=localhost;dbname=voitures;port=3306", 'root', '');


$query = Dbconnection::getPdo()->query('select * from voitures where id_immatriculation=' . $voiture_id);

$voiture = $query->fetch(PDO::FETCH_ASSOC);

$title = 'Annonce : ' . $voiture['marque'] . ' ' . $voiture['modele'];

require_once 'template/head.php'; ?>


<body>
    <?php require_once 'template/header.php'; ?>

    <main>

        <div class="container">
            <div class="dflex">

                <div class="card style=" width: 18rem;">
                    <div class="card-header">
                        <?php echo $voiture['immatriculation'] ?>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $voiture['marque'] . " " . $voiture['modele'] ?></h5>
                        <img src="<?php echo $voiture['image'] ?>" width=10% alt="">
                        <p class="card-text"><?php ?></p>
                        <p class="card-text">année : <?php echo $voiture['annee'] ?></p>
                        <p class="card-text"><?php echo $voiture['km'] ?> km</p>
                        <p class="card-text">Motorisation : <?php echo $voiture['type_motorisation'] ?></p>
                        <p class="card-text">Etat : <?php echo $voiture['etat'] ?></p>

                    </div>
                </div>
            </div>
        </div>

    </main>


    <?php
    require 'template/footer.php';
    ?>