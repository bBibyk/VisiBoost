<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href='/Visiboost/Visiboost/'>
    <title>S'abonner - VisiRoom</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/subscribe.css">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

<!-- Barre de navigation -->
<?php require_once 'view/header.php'; ?>

<!-- Contenu principal -->
<div class="subscribe-container">
    <h1>Choisissez votre abonnement</h1>
    <p>Optimisez votre référencement et boostez votre visibilité en ligne.</p>

    <!-- Tableau des abonnements -->
    <table class="subscription-table">
        <thead>
        <tr>
            <th>Offre</th>
            <th>Free</th>
            <th>Standard</th>
            <th>Premium</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>Accès au livret de conseils</strong></td>
            <td>✅</td>
            <td>✅</td>
            <td>✅</td>
        </tr>
        <tr>
            <td><strong>Analyse SEO du site</strong></td>
            <td>1 seule analyse</td>
            <td>✅</td>
            <td>✅</td>
        </tr>
        <tr>
            <td><strong>Suivi des performances</strong></td>
            <td>-</td>
            <td>✅</td>
            <td>✅</td>
        </tr>
        <tr>
            <td><strong>Analyse concurrentielle</strong></td>
            <td>-</td>
            <td>✅</td>
            <td>✅</td>
        </tr>
        <tr>
            <td><strong>Intervention des experts</strong></td>
            <td>-</td>
            <td>-</td>
            <td>✅</td>
        </tr>
        <tr>
            <td><strong>Nombre de domaines autorisés</strong></td>
            <td>1</td>
            <td>∞</td>
            <td>∞</td>
        </tr>
        <tr>
            <td><strong>Nombre d'analyses disponibles</strong></td>
            <td>1</td>
            <td>∞</td>
            <td>∞</td>
        </tr>
        <tr>
            <td><strong>Tarif</strong></td>
            <td>Gratuit</td>
            <td>18,99€/mois</td>
            <td>À partir de 49,99€/mois</td>
        </tr>
        <tr>
            <td></td>
            <td><button onclick="window.location.href='updateSub/F'">S'abonner</button></td>
            <td><button onclick="window.location.href='updateSub/S'">S'abonner</button></td>
            <td><button onclick="window.location.href='updateSub/P'">S'abonner</button></td>
        </tr>
        </tbody>
    </table>
</div>

<script>
    function redirectToPayment(plan) {
        window.location.href = "payment.html?plan=" + plan;
    }
</script>

</body>
</html>
