<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev 101</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #c3931b;
            --primary-rgb: 195, 147, 27;
            --secondary: #7c5c0d;
            --bg-dark: #070a13;
            --card-bg: rgba(20, 27, 45, 0.65);
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
            --border-glow: rgba(195, 147, 27, 0.25);
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            line-height: 1.6;
            background-image: 
                radial-gradient(at 0% 0%, rgba(195, 147, 27, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(0, 114, 255, 0.05) 0px, transparent 50%);
            background-attachment: fixed;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 45vh;
            background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, var(--bg-dark), transparent);
            z-index: 2;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(7, 10, 19, 0.95), rgba(195, 147, 27, 0.25));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            text-align: center;
            z-index: 3;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: clamp(1.8rem, 4vw, 3.2rem);
            margin: 0;
            font-weight: 700;
            letter-spacing: -0.5px;
            background: linear-gradient(to right, #ffffff, #d0a42b, var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 4px 20px rgba(0,0,0,0.4);
        }

        .hero p {
            font-size: 1rem;
            color: var(--primary);
            letter-spacing: 4px;
            margin-top: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        /* LAYOUT & CARDS GRID */
        .container {
            max-width: 1200px;
            margin: -50px auto 80px;
            padding: 0 25px;
            position: relative;
            z-index: 10;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 25px;
        }

        /* NEW STYLE WA3ER FOR CARDS */
        .card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 28px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.06);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35), 
                        inset 0 1px 1px rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--border-glow), transparent);
            transition: 0.5s;
            transform: translateX(-100%);
        }

        .card:hover::before {
            transform: translateX(100%);
        }

        .card:hover {
            transform: translateY(-6px);
            background: rgba(25, 34, 56, 0.8);
            border-color: rgba(var(--primary-rgb), 0.4);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5), 
                        0 0 20px rgba(var(--primary-rgb), 0.15);
        }

        .card-full {
            grid-column: 1 / -1;
        }

        h2 {
            font-size: 1.2rem;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: -0.3px;
        }

        h2 i {
            color: var(--primary);
            background: rgba(var(--primary-rgb), 0.1);
            padding: 8px;
            border-radius: 8px;
            font-size: 1.1rem;
        }

        /* FORMS & INPUTS */
        .form {
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 18px;
        }

        label {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #1f2a45;
            background: #0f1524;
            color: white;
            font-family: inherit;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
        }

        .input:focus {
            outline: none;
            border-color: var(--primary);
            background: #141c30;
            box-shadow: 0 0 0 3px rgba(var(--primary-rgb), 0.15), 
                        inset 0 2px 4px rgba(0,0,0,0.2);
        }

        /* BUTTONS (More Tech/Chic Look) */
        .form-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 11px 20px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.88rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(var(--primary-rgb), 0.2);
            flex: 1;
            min-width: 120px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(var(--primary-rgb), 0.35);
            filter: brightness(1.1);
        }

        .btn-secondary {
            background: #1e2640;
            color: #e2e8f0;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: none;
        }

        .btn-secondary:hover {
            background: #293456;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            border-color: rgba(255,255,255,0.15);
        }

        /* LINK LISTS (Premium Pagination Styles) */
        .links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
            align-items: center;
        }

        .link {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0f1524;
            color: #ffe396;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.05);
            transition: all 0.2s ease;
        }

        .link:hover {
            background: var(--primary);
            color: var(--bg-dark);
            transform: scale(1.1);
            box-shadow: 0 0 12px rgba(var(--primary-rgb), 0.4);
        }

        /* Custom separator text clean up */
        .links-wrapper {
            color: rgba(255,255,255,0.1);
            font-size: 0.8rem;
        }

        /* PHP Output container styling */
        .php-output {
            margin-top: 20px;
            background: #070a13;
            padding: 18px;
            border-radius: 10px;
            border-left: 4px solid var(--primary);
            font-family: 'Fira Code', 'Courier New', monospace;
            font-size: 0.9rem;
            overflow-x: auto;
            box-shadow: inset 0 2px 8px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>

<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Welcome  to Fatima Zohra El Bakkali  portefolio / Développement Digital 🚀</h1>
        <p>Build • Learn • Deploy 🚀</p>
    </div>
</section>

<div class="container">
    <div class="grid-layout">
<?php

include_once 'Traitements.php';

$groupe = "Dev 101";
$plt = "Vercel";

echo "<div class='card'>";
echo "<h2><i class='fas fa-desktop'></i> Premier site de $groupe sur $plt</h2>";
echo "</div>";


// Cours PHP
echo "<div class='card'>";
echo "<h2><i class='fas fa-book'></i> Cours PHP</h2>";
echo "<a href='/php.pptx' class='btn'><i class='fas fa-download'></i> Telecharger Le cours</a>";
echo "</div>";

// Communication
echo "<div class='card'>";
echo "<h2><i class='fas fa-paper-plane'></i> Communication via formulaire :</h2>";
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
echo "<h2><i class='fas fa-table'></i> Appel Table</h2>";
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
echo "<h2><i class='fas fa-caret-up'></i> Appel Triangle via form</h2>";
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
echo "<h2><i class='fas fa-link'></i> Appel Triangle via liens hypertext</h2>";

echo "<div class='links'>";
for($i=3;$i<=10;$i++){
    echo "<a href='index.php?action4=$i' class='link'>$i</a>";
}
echo "</div>";

if(!empty($_GET['action4'])){
    Triangle($_GET['action4']);
}

echo "</div>";


// Atelier 1
echo "<div class='card'>";
echo "<h2><i class='fas fa-laptop-code'></i> Atelier 1</h2>";
echo "<a href='/At1.pdf' class='btn'><i class='far fa-file-pdf'></i> Voir PDF</a>";
echo "</div>";


// Atelier 2
echo "<div class='card'>";
echo "<h2><i class='fas fa-user-plus'></i> Atelier 2-  Gestion d’un formulaire d’inscription </h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At2.pdf' class='btn btn-secondary'><i class='far fa-file-pdf'></i> Voir PDF</a>";
echo "<a href='inscription.php' class='btn'><i class='fas fa-pen-alt'></i> Inscription en ligne</a>";
echo "</div>";
echo "</div>";


// Atelier 3
echo "<div class='card'>";
echo "<h2><i class='fas fa-cloud-upload-alt'></i> Atelier 3- Upload de fichiers en PHP</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At3_enn.pdf' class='btn btn-secondary'>Ennoncé Atelier 3</a>";
echo "<a href='/At3.pdf' class='btn btn-secondary'>Voir Rapport Atelier 3</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier3_dev101.git' class='btn'> <i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";
echo "</div>";




// Atelier 4
echo "<div class='card'>";
echo "<h2><i class='fas fa-graduation-cap'></i> Atelier 4- Gestion des étudiants(Fichier texte + Upload photo +Recherche)</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At4.pdf' class='btn btn-secondary'>Ennoncé Atelier 4</a>";
echo "<a href='/Rapp4.pdf' class='btn btn-secondary'>Voir Rapport Atelier 4</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier4_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";
echo "</div>";





// Atelier 5
echo "<div class='card'>";
echo "<h2><i class='fas fa-cookie-bite'></i> Atelier 5- Gestion des sessions, cookies</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At5.pdf' class='btn btn-secondary'>Ennoncé Atelier 5</a>";
echo "<a href='/Rapp5.pdf' class='btn btn-secondary'>Voir Rapport Atelier 5</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier5_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";
echo "</div>";




// Atelier 6
echo "<div class='card'>";
echo "<h2><i class='fas fa-cube'></i> Atelier 6- la POO en PHP</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At6.pdf' class='btn btn-secondary'>Ennoncé Atelier 6</a>";
echo "<a href='#' class='btn btn-secondary'>Voir Rapport Atelier 6</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier6_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";
echo "</div>";


// Atelier 7
echo "<div class='card'>";
echo "<h2><i class='fas fa-cubes'></i> Atelier 7- POO en PHP avec Sessions</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At7.pdf' class='btn btn-secondary'>Ennoncé Atelier 7</a>";
echo "<a href='/Rapp7.pdf' class='btn btn-secondary'>Voir Rapport Atelier 7</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier7_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";
echo "</div>";


// Atelier 8
echo "<div class='card'>";
echo "<h2><i class='fas fa-shopping-basket'></i> Atelier 8- Application E-Fruits controle continu</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At8.pdf' class='btn btn-secondary'>Ennoncé Atelier 8</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier8_dev101.git' class='btn btn-secondary'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "<a href='https://efruits.vercel.app/acc.php' class='btn'><i class='fas fa-store'></i> Mystore Efruit</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/fruits.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Vercel</a>";
echo "</div>";
echo "</div>";




// Atelier 9
echo "<div class='card'>";
echo "<h2><i class='fas fa-database'></i> Atelier 9- Mysql PDO : application gestion des etudiants</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/ApplicationBDD.pptx' class='btn btn-secondary'>Ennoncé Atelier 9</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier9_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";


// Atelier 10
echo "<div class='card'>";
echo "<h2><i class='fas fa-list-ol'></i> Atelier 10-La Pagination en PHP</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At10.pdf' class='btn btn-secondary'>Ennoncé Atelier 10</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier10_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";





// Atelier 11
echo "<div class='card'>";
echo "<h2><i class='js-square fab fa-js'></i> Atelier 11 Ajax Reponse HTML</h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At11.pdf' class='btn btn-secondary'>Ennoncé Atelier 11 </a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier11_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";


// Atelier 12
echo "<div class='card'>";
echo "<h2><i class='code fas fa-code'></i> Atelier 12 Ajax Reponse Json </h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At12.pdf' class='btn btn-secondary'>Ennoncé Atelier 12</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier12_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";


// Atelier 13
echo "<div class='card'>";
echo "<h2><i class='fas fa-server'></i> Atelier 13 services web </h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At13.pdf' class='btn btn-secondary'>Ennoncé Atelier 13</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/atelier13_dev101.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";

// Atelier 14
echo "<div class='card'>";
echo "<h2><i class='fas fa-hamburger'></i> Atelier 14- Burger_Code - </h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/burger_code.pptx' class='btn btn-secondary'>Ennoncé Atelier 14</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/burgercode.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";



// Atelier 15
echo "<div class='card'>";
echo "<h2><i class='fas fa-sitemap'></i> Atelier 15 Architecture MVC </h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At15.pdf' class='btn btn-secondary'>Ennoncé Atelier 15</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/MVC.git' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";

echo "<div class='card'>";
echo "<h2><i class='fas fa-store-alt'></i> My store </h2>";
echo "<div style='display:flex; flex-direction:column; gap:10px;'>";
echo "<a href='/At15.pdf' class='btn btn-secondary'>Ennoncé My_store</a>";
echo "<a href='https://github.com/fatimazahraelbakkali78-blip/My_store' class='btn'><i class='fab fa-github'></i> GitHub Repo Local</a>";
echo "</div>";
echo "</div>";



?>

    </div>
</div>

</body>
</html>