



   <div class="infosCompte">
        Hello,  <?php echo($_SESSION['currentUser']['prenom'])?>
       <br>
        Vous etes connecté en tant que <?php echo($_SESSION['currentUser']['role'])?>
        <br>
        <br>
        <a href="index.php?action=deconnexion" style="text-decoration:none;">Se déconnecter</a>
    </div>


    <div class="administration">
        <h2> Ajouter un coach à la bdd </h2>
       
        <div class="coachInscription">
            <form id="coachForm" action="index.php?action=creationCoach" enctype="multipart/form-data" method="post">
            <table class="tableForm">
            <tr><td>
            <label> 
                Role
            </label>
            </td><td>
            <input type="text" id="role" name="role" placeholder="coach, accueil, medecin, manager" required/>
            </td></tr>
           
            <tr><td>
            <label> 
                Prenom
            </label>
            </td><td>
            <input type="text" id="prenom" name="prenom" placeholder="Jean" required/>
            </td></tr>
            
            <tr><td>
            <label> 
                Nom
            </label>
            </td><td>
            <input type="text" id="nom" name="nom" placeholder="Dubois" required/>
            </td></tr>
            
            <tr><td>
            <label> 
                Mail
            </label>
            </td><td>
            <input type="text" id="mail" name="mail" placeholder="jeandubois@mail.com" required/>
            </td></tr>
           
            <tr><td>
            <label> 
                Identifiant Skype
            </label>
            </td><td>
            <input type="text" id="skype" name="skype" placeholder="jdubois75" required/>
            </td></tr>
            
            <tr><td>
            <label> 
                Mot de passe
            </label>
            </td><td>
            <input type="password" id="password" name="password" required/>
            </td></tr>
         
            <tr><td>
            <label> 
                Telephone
            </label>
            </td><td>
            <input type="text" id="telephone" name="telephone" placeholder="0102030405" required/>
            </td></tr>
           
            <tr><td>
            <label> 
                Adresse
            </label>
            </td><td>
            <input type="text" id="adresse" name="adresse" placeholder="13 Rue des Moulins" />
            </td></tr>
            
            <tr><td>
            <label> 
                Ville
            </label>
            </td><td>
            <input type="text" id="ville" name="ville" placeholder="Paris" />
            </td></tr>
           
            <tr><td>
            <label> 
                Code Postal
            </label>
            </td><td>
            <input type="text" id="cp" name="cp" placeholder="75015" />
            </td></tr>
           
            <tr><td>
            <label> 
                Pays
            </label>
            </td><td>
            <input type="text" id="pays" name="pays" placeholder="France" />
            </td></tr>
            
            <tr><td>
            <label> 
               Specialités
            </label>
            </td><td>
            <textarea id="specialites" name="specialites" >Fitness, musculation, pilate</textarea>
            </td></tr>

            <tr><td>
            <label> 
               Photo
            </label>
            </td><td>
            <input type="file" id="photo" name="photo" />
            </td></tr>
            
            <tr><td colspan="2">
            <input type="submit" id="submit" name="submit" value="envoyer" />
            </td></tr>
            </table>
            </form>
        </div>
    </div>

