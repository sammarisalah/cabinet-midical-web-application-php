
<?php
session_start();

    $db_username = 'root';
    $db_password = '';
    $db_name     = 'gestion_cabinet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    $id =$_POST['id']; 
if ($id!==""){
    $req="DELETE FROM patient WHERE id=$id";
    $exec_requete = mysqli_query($db,$req);
    header('Location:showlist.php');

}


mysqli_close($db); // fermer la connexion
?>