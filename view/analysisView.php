<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisiBoost</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/analysis.css">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>
<body>

<!--Header-->
<?php require_once 'view/header.php'; ?>

<div class="home-container">
    <div class="overlay"></div>
    <div class="content">
        <h1>Prêt à Booster votre Référencement ?</h1>
        <p><span class="highlight">1ère page</span> Google Garantie</p>
        <div class="search-container">
            <form action="/Visiboost/Visiboost/addAnalysis" method="POST">
                <input type="text" id="domainName" name="domainName" placeholder="Adresse de votre site (obligatoire) ...">
                <button type="submit">Lancer l'analyse</button>
            </form>
        </div>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
