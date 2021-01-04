
<?php
session_start();

    $db_username = 'root';
    $db_password = '';
    $db_name     = 'gestion_cabinet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['sexe'];
    $medecin=$_POST['medecin'];
    $maladie=$_POST['maladie'];

        if( $firstname!=="" && $lastname!=="" && $age!=="" && $phone!=="" && $email!=="" && $maladie!=="" ) {
              $requete = "INSERT INTO patient (first_name,last_name,age,phone,email,gender,maladie,doctor) VALUES ('$firstname','$lastname','$age', '$phone','$email','$gender','$maladie','$medecin')";
                $exec_requete = mysqli_query($db,$requete);
           header('Location:showlist.php');
        }
else{
    echo"Erreur! all fields are required  Please try again !";
    
}

        

      
   


mysqli_close($db); // fermer la connexion
?>