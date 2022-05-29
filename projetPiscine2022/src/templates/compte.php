


<div class="compteContainer">
   <div class="infosCompte">
        Bonjour,  <?php echo($_SESSION['currentUser']['prenom'])?>
        <br>
        Vous etes connecté en tant que <?php echo($_SESSION['currentUser']['role'])?>
        <br>
        <br>
        <a href="index.php?action=deconnexion" style="text-decoration:none;">Se déconnecter</a>
    </div>
</div>
