<div class="loginContainer">
    <form id="loginForm" action="index.php?action=login" method="post" class="tableForm" >
       
        <label> 
            Mail
        </label>
        <input type="text" id="mail" name="mail" placeholder="jeandubois@mail.com" required />

       <label>
           Mot de passe
        </label>
        <input type="password" id="password" name="password" required />
        <input type="submit" id="submit" name="submit" />
    </form>
    <p> Pas encore inscrit? </p> <a href="index.php?action=inscription" style="text-decoration-none">Créez votre compte </a>
</div>