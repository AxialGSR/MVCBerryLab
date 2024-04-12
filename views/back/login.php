<body>
   <!--appel au header-->
   <?php
   // include('../public/src/inc/headerAdmin.php');
    //include('../public/src/inc/headAdmin.php');
    ?>
  <link rel="stylesheet" href="../../public/src/css/login.css">
  <div class="pageLogin"></div>
  <h2 class="login">Login</h2>
    <div class="inputLogin">
        <form name="login" methode="POST" action="">
          <div class="labelAdmin"><label for="nom">Votre Nom: </label></div>
            <input type="text" name="nom" id="nom" placeholder="votre nom" required>
          <div class="labelAdmin"><label for="prenom">Votre prenom: </label></div>
           <input type="text" name="prenom" id="prenom" placeholder="votre prenom" required>
          <div class="labelAdmin"><label for="password">Mot de passe:</label></div>
            <input type="password" name="password" id="password" placeholder="password" required>
          <div class="bouton" id="bouton">
            <button class="buttonAdmin" type="submit" name="submit" id="submit" disabled="disabled">Connexion</button>
          </div>
        </form>
      </div>
</body>
<?php
    //require_once('../public/src/inc/footerAdmin.php');
    ?>
</html>