<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inscription Étudiant</title>

<style>
    * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        margin: 0;
        background: #f4f6f9;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background: white;
        padding: 25px;
        border-radius: 10px;
        width: 100%;
        max-width: 500px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input, select, textarea {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    textarea {
        resize: vertical;
    }

    .row {
        display: flex;
        gap: 10px;
    }

    .row .form-group {
        flex: 1;
    }

    .radio-group {
        display: flex;
        gap: 15px;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }

    /* Responsive */
    @media (max-width: 600px) {
        .row {
            flex-direction: column;
        }
    }
</style>

</head>
<body>

<div class="container">
    <h2>Inscription Étudiant</h2>

    <form action="inscription.php" method="POST">

        <div class="form-group">
            <label>Numéro d'inscription</label>
            <input type="text" name="numero" required>
        </div>

        <div class="row">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required>
            </div>

            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" required>
            </div>
        </div>

        <div class="form-group">
            <label>Ville</label>
            <input type="text" name="ville">
        </div>

        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="date_naissance">
        </div>

        <div class="form-group">
            <label>Sexe</label>
            <div class="radio-group">
                <label><input type="radio" name="sexe" value="Homme"> Homme</label>
                <label><input type="radio" name="sexe" value="Femme"> Femme</label>
            </div>
        </div>

        <div class="form-group">
            <label>Loisirs</label>
            <select name="loisirs">
                <option value="Sport">Sport</option>
                <option value="Lecture">Lecture</option>
                <option value="Musique">Musique</option>
                <option value="Voyage">Voyage</option>
            </select>
        </div>
<div class="form-group">
            <label>Loisirs 2</label>
            
                <input  name="loi[]" type="checkbox" value="Sport"/>Sport
                <input  name="loi[]" type="checkbox" value="Lecture"/>Lecture
                <input  name="loi[]" type="checkbox" value="musique"/>Music
                <input  name="loi[]" type="checkbox" value="Voyage"/>Travelling
                
        </div>
        <div class="form-group">
            <label>Informations complémentaires</label>
            <textarea name="infos" rows="3"></textarea>
        </div>

        <input  name="action_inscription" value="S'inscrire"  type="submit" />

    </form>






<?php 


include_once 'Traitements.php';


// action inscription 

if(!empty($_POST['action_inscription']))
    {

$num=$_POST['numero'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ville=$_POST['ville'];
$dn=$_POST['date_naissance'];
$sexe=$_POST['sexe'];
$loisirs=$_POST['loisirs'];
$loisirs2=$_POST['loi'];
$infos=$_POST['infos'];

displayinfosintohtmltable($num,$nom,$prenom,$ville,$dn,$sexe,$loisirs,$loisirs2,$infos);

    }


?>



</div>

</body>
</html>