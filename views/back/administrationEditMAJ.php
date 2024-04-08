<body>
<link rel="stylesheet" href="public/src/css/administration.css">
    <!--appel au header-->
    <?php
    include('public/src/inc/headAdmin.php');
    ?>
<!--Page du CRUD administration site-->
<h2>Administration</h2>
<div class="pageAdministration">
    <div class="adminFormation">
        <h3>Edition/Modification Administrateur</h3>
        <div class="input"> 
          <form name="contact" methode="POST" action="routeAdmin.php?route='create-admin'">
            <div class="labelContener"><label for="email">email : </label></div>
            <input type="email" name="email" id="email" placeholder="Votre adresse email" required>
            <div class="labelContener"><label for="password">Mot de passe:</label></div>
            <input type="password" name="password1" id="password1" placeholder="password" required>
            <div class="labelContener"><label for="password">Répéter mot de passe:</label></div>
            <input type="password" name="password2" id="password2" placeholder="password" required>
            <div class="boutons" id="boutons">
                <button class="creation" type="submit" name="creation" id="submit" disabled="disabled">Modification</button>
            </div>
          </form>
        </div>  
        <h3>Edition/Modification Formation</h3>
        <div class="input">
            <form name="formation" methode="POST" action="routeAdmin.php?route='creat-formation'"  enctype="multipart/form-data">
                <div class="labelContener"> <label for="libelleFormation">Formation:</label></div>
                <input type="text" name="libelleFormation" id="libelleFormation" placeholder="libelle de Formation">
                <div class="labelContener"><label class="photoFormation"></div>
                <input type="file" name="photoFormation" id="photoFormation" placeholder="Fichier photo" >
                <div class="labelContener"><label for="descriptionFormation" class="descriptionFormation" id="descriptionFormation">Description de la formation</label></div>
                <textarea class = "descriptionFormation" name="descriptionFormation" id="descriptionFormation"></textarea>
                     <div class="boutons" id="boutons">
                        <div class="labelContener"><label for="formation" class="formation" id="formation">Sélection outil:</label></div> 
                        <input type="number" class="edition" size="5" min="1" max="16" placeholder="Edition">
                        <button class="creat" type="submit" name="creat" id="creat" disabled="disabled">Modification</button>
                    </div>
            </form>
        </div>
    </div>
    <div class="outilRealisation">  
        <h3>Editon/Modification des outils</h3>
        <div class="input">
            <form name="outil" methode="POST" action="routeAdmin.php?route='creat-outil'" enctype="multipart/form-data">
                <label for="libelleOutil">Outil:</label>
                <br>
                <input type="text" name="libelleOutil" id="libelleOutil" placeholder="libelle de l'outil">
                <br>
                <label for="photoOutil">Fichier photo de l'outil:</label>
                <br>
                <input type="file" name="photoOutil" id="photoOutil" placeholder="Fichier photo de l'outil" >
                 <br>
                <label for="descriptionOutil" class="descriptionOutil" id="descriptionOutil">Description de l'Outil</label> 
                <br>
                <textarea class = "descriptionOutil" name="descriptionOutil" id="descriptionOutil"></textarea>
                <br> 
                <div class="boutons" id="boutons">      
                    <button class="creation" type="submit" name="creat" id="creat" disabled="disabled">Modification</button>
                </div>
            </form>
        </div>
        <h3>Edition/Modification des réalisations</h3>  
        <div class="input">
            <form name="realisation" methode="POST" action="routeAdmin.php?route='creat-rea'" enctype="multipart/form-data">
                <label for="libellerealisation">Réalisation:</label>
                <br>
                <input type="text" name="libelleRealisation" id="libelleRealisation" placeholder="libelle de la realisation">
                <br>
                 <label for="photoRealisation">Fichier photo de la realisation:</label>
                <br>
                <input type="file" name="photoRealisation" id="photoRealisation" placeholder="Fichier photo de la realisation" >
                <br>
                <label for="descriptionRealisation" class="descriptionRealisation" id="descriptionRealisation">Description de la réalisation</label> 
                <br>
                <textarea class = "descriptionRealisation" name="descriptionRealisation" id="descriptionRealisation"></textarea>
                <br>
                <div class="boutons" id="boutons">
                     <button class="creation" type="submit" name="creation" id="submit" disabled="disabled">Modification</button>
                </div>
            </form>
        </div>
    <div>
</div> 
</html>
</body>