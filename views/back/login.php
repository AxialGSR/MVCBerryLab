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
        <form name="login" methode="POST" action="../controllers/administrateur.php">
          <div class="labelAdmin"><label for="nom">Votre adresse email: </label></div>
          <input type="email" name="" id="email" placeholder="votre email" required>
          <div class="labelAdmin"><label for="password">Mot de passe:</label></div>
          <input type="password" name="password" id="password" placeholder="password" required>
          <br>
          <div class="bouton" id="bouton">
            <button class="buttonAdmin" type="submit" name="submit" id="submit" disabled="disabled">Connexion</button>
        </form>
        </div>
      </div>
</body>
<?php
    //require_once('../public/src/inc/footerAdmin.php');
    ?>
</html>