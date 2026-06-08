<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev 101</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
         :root {
            --primary: #c3931b;
            --secondary: #c3931b;
            --bg-dark: #0b0f19;
            --card-bg: #141b2d;
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            line-height: 1.6;
        }

        /* HERO SECTION - High-tech coding background */
        .hero {
            position: relative;
            height: 45vh;
            background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(11, 15, 25, 0.9), rgba(0, 114, 255, 0.4));
        }

        .hero-content {
            position: relative;
            text-align: center;
            z-index: 2;
        }

        .hero h1 {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(1.8rem, 4vw, 3rem);
            margin: 0;
            font-weight: 700;
            background: linear-gradient(to right, #ffffff, var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--primary);
            letter-spacing: 3px;
            margin-top: 8px;
            font-weight: 600;
        }

        /* LAYOUT & CARDS GRID */
        .container {
            max-width: 1100px;
            margin: -40px auto 60px;
            padding: 0 20px;
            position: relative;
            z-index: 3;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 1.4rem;
            color: #ffffff;
            margin: 40px 0 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-left: 4px solid var(--primary);
            padding-left: 12px;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--card-bg);
            padding: 24px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 210, 255, 0.3);
            box-shadow: 0 12px 28px rgba(0, 210, 255, 0.1);
        }

        /* Full width utility */
        .card-full {
            grid-column: 1 / -1;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            margin-top: 0;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        h2 i {
            color: var(--primary);
        }

        /* FORMS & INPUTS */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 16px;
        }

        label {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 600;
        }

        .input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px 14px;
            border-radius: 6px;
            border: 1px solid #232d45;
            background: #1a2235;
            color: white;
            font-family: inherit;
            transition: 0.2s;
        }

        .input:focus {
            outline: none;
            border-color: var(--primary);
            background: #1e273e;
        }

        /* BUTTONS */
        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 18px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }

        .btn-secondary {
            background: #232d45;
            color: var(--text-light);
            border: 1px solid rgba(255,255,255,0.05);
        }

        .btn-secondary:hover {
            background: #2e3b5a;
        }

        /* LINK LISTS (Triangle numbers) */
        .links {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .link {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1a2235;
            color: var(--primary);
            border-radius: 6px;
            font-weight: bold;
            border: 1px solid rgba(255,255,255,0.05);
            transition: 0.2s;
        }

        .link:hover {
            background: var(--primary);
            color: var(--bg-dark);
        }

        /* PHP Output container styling */
        .php-output {
            margin-top: 15px;
            background: #0b0f19;
            padding: 15px;
            border-radius: 8px;
            border-left: 3px solid var(--primary);
            font-family: monospace;
            overflow-x: auto;
        }
    </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Welcome Fatima Zohra El Bakkali / Développement Digital</h1>
        <p>Build • Learn • Deploy 🚀</p>
    </div>
</section>

<!-- CONTENT -->
<div class="container">
<?php

include_once 'Traitements.php';

$groupe = "Dev 101";
$plt = "Vercel";

echo "<div class='card'>";
echo "<h2>Premier site de $groupe sur $plt</h2>";
echo "</div>";


// Cours PHP
echo "<div class='card'>";
echo "<h2>Cours PHP</h2>";
echo "<a href='/php.pptx' class='btn'>Telecharger Le cours</a>";
echo "</div>";

// Communication
echo "<div class='card'>";
echo "<h2>Communication via formulaire :</h2>";
?>
<form method="POST" action="login.php" class="form">
    
    <div class="form-group">
        <label>Login:</label>
        <input type="text" name="log" class="input" />
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="pass" class="input" />
    </div>

    <div class="form-actions">
        <input type="submit" name="action1" value="connexion" class="btn" />
        <input type="reset" value="Réinitialiser" class="btn btn-secondary" />
    </div>

</form>
<?php
echo "</div>";


// Table
echo "<div class='card'>";
echo "<h2>Appel Table</h2>";
?>
<form method="POST" action="index.php" class="form">

    <div class="form-group">
        <label>nbre de lignes :</label>
        <input type="text" name="rows" class="input" />
    </div>

    <div class="form-group">
        <label>nbre de colonnes :</label>
        <input type="text" name="cols" class="input" />
    </div>

    <div class="form-actions">
        <input type="submit" name="action2" value="dessiner" class="btn" />
        <input type="reset" value="Réinitialiser" class="btn btn-secondary" />
    </div>

</form>
<?php
if(!empty($_POST['action2'])){
    table($_POST['rows'], $_POST['cols']);
}
echo "</div>";


// Triangle form
echo "<div class='card'>";
echo "<h2>Appel Triangle via form</h2>";
?>
<form method="POST" action="index.php" class="form">

    <div class="form-group">
        <label>nbre de lignes :</label>
        <input type="text" name="rowst" class="input" />
    </div>

    <div class="form-actions">
        <input type="submit" name="action3" value="dessiner" class="btn" />
        <input type="reset" value="Réinitialiser" class="btn btn-secondary" />
    </div>

</form>
<?php
if(!empty($_POST['action3'])){
    Triangle($_POST['rowst']);
}
echo "</div>";


// Triangle liens
echo "<div class='card'>";
echo "<h2>Appel Triangle via liens hypertext</h2>";

echo "<div class='links'>";
for($i=3;$i<=10;$i++){
    echo "<a href='index.php?action4=$i' class='link'>$i</a>***";
}
echo "</div>";

if(!empty($_GET['action4'])){
    Triangle($_GET['action4']);
}

echo "</div>";


// Atelier 1
echo "<div class='card'>";
echo "<h2>Atelier 1</h2>";
echo "<a href='/At1.pdf' class='btn'>Voir PDF</a>";
echo "</div>";


// Atelier 2
echo "<div class='card'>";
echo "<h2>Atelier 2-  Gestion d’un formulaire d’inscription </h2>";
echo "<a href='/At2.pdf' class='btn'>Voir PDF</a>";
echo "<a href='inscription.php' class='btn'>Inscription en ligne</a>";
echo "</div>";


// Atelier 3
echo "<div class='card'>";
echo "<h2>Atelier 3- Upload de fichiers en PHP</h2>";
echo "<a href='/At3_enn.pdf' class='btn'>Ennoncé Atelier 3</a>";
echo "<a href='/At3.pdf' class='btn'>Voir Rapport Atelier 3</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier3_dev101.git' class='btn'> <i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";




// Atelier 4
echo "<div class='card'>";
echo "<h2>Atelier 4- Gestion des étudiants(Fichier texte + Upload photo +Recherche)</h2>";
echo "<a href='/At4.pdf' class='btn'>Ennoncé Atelier 4</a>";
echo "<a href='/Rapp4.pdf' class='btn'>Voir Rapport Atelier 4</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier4_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";





// Atelier 5
echo "<div class='card'>";
echo "<h2>Atelier 5- Gestion des sessions, cookies</h2>";
echo "<a href='/At5.pdf' class='btn'>Ennoncé Atelier 5</a>";
echo "<a href='/Rapp5.pdf' class='btn'>Voir Rapport Atelier 5</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier5_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";




// Atelier 6
echo "<div class='card'>";
echo "<h2>Atelier 6- la POO en PHP</h2>";
echo "<a href='/At6.pdf' class='btn'>Ennoncé Atelier 6</a>";
echo "<a href='#' class='btn'>Voir Rapport Atelier 6</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier6_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";


// Atelier 7
echo "<div class='card'>";
echo "<h2>Atelier 7- POO en PHP avec Sessions</h2>";
echo "<a href='/At7.pdf' class='btn'>Ennoncé Atelier 7</a>";
echo "<a href='/Rapp7.pdf' class='btn'>Voir Rapport Atelier 7</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier7_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";


// Atelier 8
echo "<div class='card'>";
echo "<h2>Atelier 8- Application E-Fruits controle continu</h2>";
echo "<a href='/At8.pdf' class='btn'>Ennoncé Atelier 8</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier8_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";

echo "<a href='https://efruits.vercel.app/acc.php' class='btn'>Mystore Efruit</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/fruits.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Vercel</a>";

echo "</div>";




// Atelier 9
echo "<div class='card'>";
echo "<h2>Atelier 9- Mysql PDO  : application gestion des etudiants</h2>";
echo "<a href='/ApplicationBDD.pptx' class='btn'>Ennoncé Atelier 9</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier9_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";


// Atelier 10
echo "<div class='card'>";
echo "<h2>Atelier 10-La Pagination en PHP</h2>";
echo "<a href='/At10.pdf' class='btn'>Ennoncé Atelier 10</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier10_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";





// Atelier 11
echo "<div class='card'>";
echo "<h2>Atelier 11 Ajax Reponse HTML</h2>";
echo "<a href='/At11.pdf' class='btn'>Ennoncé Atelier 11 </a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier11_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";


// Atelier 12
echo "<div class='card'>";
echo "<h2>Atelier 12 Ajax Reponse Json </h2>";
echo "<a href='/At12.pdf' class='btn'>Ennoncé Atelier 12</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier12_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";


// Atelier 13
echo "<div class='card'>";
echo "<h2>Atelier 13 services web </h2>";
echo "<a href='/At13.pdf' class='btn'>Ennoncé Atelier 13</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier13_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";

// Atelier 14
echo "<div class='card'>";
echo "<h2>Atelier 14- Burger_Code - </h2>";
echo "<a href='/burger_code.pptx' class='btn'>Ennoncé Atelier 14</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/burgercode.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";



// Atelier 15
echo "<div class='card'>";
echo "<h2>Atelier 15 Architecture MVC </h2>";
echo "<a href='/At15.pdf' class='btn'>Ennoncé Atelier 15</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/MVC.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";


echo "</div>";

echo "<div class='card'>";
echo "<h2>My store </h2>";
echo "<a href='/At15.pdf' class='btn'>Ennoncé My_store</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/My_store' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";


// EFMs
echo "<div class='card'>";
echo "<h2>EFM Exemples  </h2>";
echo "<a href='/M107_EFM_DEV_V1.docx' class='btn'>EFM1 </a>";
echo "<a href='/gestionstagiaire_v1.sql' class='btn'>DB-EFM1 </a>";
echo "<a href='/M107_EFM_DEV_V2.docx' class='btn'>EFM2 </a>";
echo "<a href='/gestionproduit_v2.sql' class='btn'>DB-EFM2 </a>";
echo "<a href='/v1.rar' class='btn'>EFM-V1 </a>";
echo "<a href='/v2.rar' class='btn'>EFM-V2 </a>";
echo "</div>";
?>



</div>

</body>
</html>