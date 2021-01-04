
<?php
session_start();

    $db_username = 'root';
    $db_password = '';
    $db_name     = 'gestion_cabinet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    $username =$_POST['username']; 
    $email=$_POST['email'];
    $password = $_POST['password'];
    $role=$_POST['fonction'];
    
if($username !== "" && $password !== "" && $email !=="" && $role !=="")
    {   
        if( $role=="secretaire"){
            $requete = "INSERT INTO secretaire ( name , email , password)  VALUES ('$username', '$email', '$password')";
            $exec_requete = mysqli_query($db,$requete);
            header ("Location: loginS.php");

        }

        else if ($role== "doctor")
        { 
            $requete = "INSERT INTO doctor( name , email , password)  VALUES ('$username', '$email', '$password')";
            $exec_requete = mysqli_query($db,$requete);
            header('Location: loginD.php?status=success'); // utilisateur ou mot de passe incorrect
        }
    }
   


mysqli_close($db); // fermer la connexion
?>