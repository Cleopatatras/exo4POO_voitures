<?php
require_once 'config/config.php';


$title = 'Ajouter une voiture';

require_once 'template/head.php';
require_once 'template/header.php';

?>

<div class="container">
    <h1>Ajouter une voiture</h1>

    <form action="form_validation_voiture.php" method="POST">
        <div class="mb-3">
            <label for="immatriculation" class="form-label">Immatriculation</label>
            <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="AA-000-AA">
        </div>
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" rows="3"></input>
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Annee</label>
            <input type="number" class="form-control" id="annee" name="annee" rows="3"></input>
        </div>
        <div class="mb-3">
            <label for="Modele" class="form-label">Modele</label>
            <input type="text" class="form-control" id="Modele" name="modele" rows="3"></input>
        </div>
        <div class="mb-3">
            <label for="km" class="form-label">Km</label>
            <input type="number" class="form-control" id="km" name="km" rows="3"></input>
        </div>
        <div class="mb-3">
            <label for="type_motorisation" class="form-label">Type de motorisation</label>
            <!-- <input type="text" class="form-control" id="type_motorisation" rows="3"></input> -->
            <select class="form-select form-select-lg mb-3" aria-label="select motorisation" name="motorisation"
                id="motorisation">
                <option value=""></option>
                <option value="Diesel">Diesel</option>
                <option value="Essence">Essence</option>
                <option value="Hybride">Hybride</option>
                <option value="Electrique">Electrique</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label">Etat</label>
            <select class="form-select form-select-lg mb-3" aria-label="select etat" name="etat" id="etat">
                <option value=""></option>
                <option value="Bon">Bon</option>
                <option value="Moyen">Moyen</option>
                <option value="Passable">Passable</option>
                <option value="Neuf">Neuf</option>
            </select>

        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>
    </form>
</div>



<?php
require_once 'template/footer.php';
?>