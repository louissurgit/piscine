


<div class="coachContainer">
   <div class="infosCompte">
        Bonjour,  <?php echo($_SESSION['currentUser']['prenom'])?>
        <br>
      
        Vous etes connecté en tant que <?php echo($_SESSION['currentUser']['role'])?>
        <br>
        <img class="coachPhoto" src="data:image/jpg;charset=utf8;base64,<?php echo $_SESSION['currentUser']['photo']; ?>" alt="coachPhoto"/> 
        <br>
        <a href="index.php?action=deconnexion" style="text-decoration:none;">Se déconnecter</a>
    </div>
</div>
