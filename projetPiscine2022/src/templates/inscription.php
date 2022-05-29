<div class="inscriptionContainer">
<form id="inscriptionForm" action="index.php?action=creationUser" method="post">
    <table class="tableForm">
        <tr><td>
        <label> 
            Prenom
        </label>
        </td><td>
        <input type="text" id="prenom" name="prenom" placeholder="Jean" required />
        </td></tr>

        <tr><td>
        <label> 
            Nom
        </label>
        </td><td>
        <input type="text" id="nom" name="nom" placeholder="Dubois" required />
        </td></tr>
  
        <tr><td>
        <label> 
            Mail
        </label>
        </td><td>
        <input type="text" id="mail" name="mail" placeholder="jeandubois@mail.com" required />
        </td></tr>
    
        <tr><td>
        <label> 
            Mot de passe
        </label>
        </td><td>
        <input type="password" id="password" name="password" required />
        </td></tr>
      
        <tr><td>
        <label> 
            Telephone
        </label>
        </td><td>
        <input type="text" id="telephone" name="telephone" placeholder="0102030405" required />
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
            Numero Carte Etudiante
        </label>
        </td><td>
        <input type="text" id="idCarte" name="idCarte" placeholder="171739201" />
        </td></tr>
        
        <tr><td colspan="2">
        <input type="submit" id="submit" name="submit" />
        </td></tr>
    </table>
</form>
</div>