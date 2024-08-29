<?php
require_once 'config/DbConnection.php';


//avec requête préparée

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    if (
        !$_POST['immatriculation'] ||
        !$_POST['marque'] ||
        !$_POST['annee'] ||
        !$_POST['modele'] ||
        !$_POST['km'] ||
        !$_POST['motorisation'] ||
        !$_POST['etat']
    ) {
        echo 'UN des champs est vide. Insertion impossible !';
    } else {

        $query = Dbconnection::getPdo()->prepare('insert into voitures (immatriculation,marque,annee,modele,km,type_motorisation,etat) 
    values (
    :immatriculation,
    :marque,
    :annee,
    :modele,
    :km,
    :type_motorisation,
    :etat
    )
    ');

        $query->bindParam('immatriculation', $_POST['immatriculation']);
        $query->bindParam('marque', $_POST['marque']);
        $query->bindParam('annee', $_POST['annee']);
        $query->bindParam('modele', $_POST['modele']);
        $query->bindParam('km', $_POST['km']);
        $query->bindParam('type_motorisation', $_POST['type_motorisation']);
        $query->bindParam('etat', $_POST['etat']);

        $query->execute();

        header('location:index.php');
    }

} else {
    echo 'pas accessible';
}