<html>
     <nav>
        <a href='loginS.php' id="login" >login as secretaire</a>
        <a href='loginD.php' id="login" >login as docteur</a>
        <a href="signup.php" id="signup">signup</a>
    </nav>
    <head>
            <title> lOGIN|Secretaire   </title>

       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
       
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verifications.php" method="POST">
                <h1>Secretaire Login</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>