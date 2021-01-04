<html>
       <nav>
        <a href='loginS.php' id="login" >login as secretaire</a>
       <a href='loginD.php' id="login" >login as Docteur</a>

        <a href="signup.php" id="signup">signup</a>
    </nav>
    <head>
         <title> Signup   </title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="register.php" method="POST">
                <h1>Creer un compte</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <label><b>Email </b></label>
                <input type="email" placeholder="Entrer l'email d'utilisateur" name="email" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <label><b>Fonction</b></label>
                <select name="fonction" id="fonction">
                    <option value=""></option>
                    <option value="secretaire">Secretaire</option>
                    <option value="doctor">Doctor</option>
                </select>
                <input type="submit" id='submit' value='Register' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Remplir tous les champs</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>