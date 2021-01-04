<?php
session_start();
$db_username = 'root';
    $db_password = '';
    $db_name     = 'gestion_cabinet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
   $username=$_POST['username'];
   $password=$_POST['password'];



if($username!=="" && $password!==""){
    $req="SELECT * FROM doctor where name='$username' and password='$password'";
    $res = mysqli_query($db,$req);   
    $ligne =mysqli_fetch_assoc($res) ;
    
    	if ($ligne!=null){
            		 echo "Connexion réussie </br>";
                     echo"le'('a')' docteur ";
            		 echo $ligne['name']." est connecter " ;
                     header ("Location: home.php");
            	}
    else {
        echo"ereuuuuuur";
    }
    
}

