<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="src/assets/css/footer.css">
    <link rel="stylesheet" href="src/assets/css/navbar.css">
    <link rel="stylesheet" href="src/assets/css/home.css">
    <link rel="stylesheet" href="src/assets/css/login.css">
    <link rel="stylesheet" href="src/assets/css/inscription.css">
    <link rel="stylesheet" href="src/assets/css/compte.css">
    <link rel="stylesheet" href="src/assets/css/admin.css">
    <link rel="stylesheet" href="src/assets/css/coach.css">
    <link rel="stylesheet" href="src/assets/css/parcourir.css">
    <link rel="stylesheet" href="src/assets/css/recherche.css">
    <link rel="stylesheet" href="src/assets/css/rdv.css">
    <link rel="stylesheet" href="src/assets/css/salle.css">
    <link rel="stylesheet" href="src/assets/css/activite.css">
    <link rel="stylesheet" href="src/assets/css/sport.css">
    <link rel="stylesheet" href="src/assets/css/container.css">

<title>Omnes Sport</title>
</head>
<body>
<?php
session_start();

require('src/templates/navbar.php');

require('src/router.php');

require('src/templates/footer.php');
?>
</body>
</html>