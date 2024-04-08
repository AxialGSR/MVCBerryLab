
<body>
    <!--zone de recherche des formations-->
    <div class="pageForm">
        <div class="presentationF">
            <h2 class="formations">Rappel des Services</h2>
              <select class="selecteurF" name="formation" id="formation" onchange="afficheOptionF()">
                <option value="" selected disabled hidden>Choissez une formation</option>
                <option value="formation montage video">Formation montage vidéo</option>
                <option value="formation designspark 2D">Formation dessiner en 2D</option>
                <option value="formation brodeuse numerique">Formation Brodeuse numérique</option>
                <option value="formation fraiseuse CNC">Formation fraiseuse CNC</option>
                <option value="formation arduino">Formation Arduino</option>
                <option value="formation imprimante 3D">Formation imprimante 3D</option>
                </select>
                <br>
              <select class="selecteurO" name="outil" id="outil" onchange="afficheOptionO()">
              <option value="" selected disabled hidden>Choissez un outil</option>
                <option value="outil montage video">Outil Montage vidéo</option>
                <option value="outil designspark 2D">Outil Designspark: Dessiner en 2D</option>
                <option value="outil brodeuse numerique">Outil brodeuse numérique</option>
                <option value="outil fraiseuse CNC">Outil fraiseuse CNC</option>
                <option value="outil arduino">Outil Arduino</option>
                <option value="outil imprimante 3D">Outil imprimante 3D</option>
              </select>
              <br>
              <div class="affichage">
                    <img  class="affImageF" src="" id="imageF" alt="Afficher votre formation">
                    <p  class="affTextF" id="texteF"></p>
                    <img  class="affImageO" src="" id="imageO" alt="Afficher notre Outil">
                    <p  class="affTextO" id="texteO"></p>
              </div>
          </div>
          <div class="formulaireC" >
              <h2 class="contacts">Contact</h2>
                <div class="infoF">
                 <form name="contact" methode="POST" action="donnees_souscripteur.php" onload="traitementForm()">
                 <label for="nom">Nom: </label>
                   <br>
                  <input type="text" name="nom" id="nom" placeholder="votre nom" required>
                  <br>
                  <label for="prenom">Prénom : </label>
                  <br>
                  <input type="text" name="prenom" id="prenom" placeholder="votre prénom" required>
                  <br>
                  <label for="email">Email   : </label>
                  <br>
                  <input type="email" name="email" id="email" placeholder="XXXX.XXXXX@XXXX.XXX" required>
                  <br>
                </div>
                <label for="presentation" class="presentation" id="pesentation">Vos commentaires nous intéresse</label> 
              <textarea class = "area" name="presentation" id="presentation"></textarea>
              <br>
              <div class="validation">
                <input type="checkbox" name="[validCheck]"value="ValidCheck" id="validCheck">
                <label for="validation">En cochant cette case, j'accepte que mes données personnelles fournies dans ce formulaire soit utilisées pour traiter ma demande.</label>
                <br>
              <button class="button" type="submit" name="submit" id="submit" disabled="disabled">Envoyer</button>
              </div>
              </form>
            </div>
      </div>
      <script src="src/js/contact.js" async></script>
    <!--appelle au footer-->
    <?php
    include ('../public/src/inc/footer.php');
    ?>
</body>
</html>