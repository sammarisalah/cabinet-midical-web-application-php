<!DOCTYPE html>
<html lang="en">
<nav>
<a href="homed.php">add patient </a>    
<a href="loginS.php">Logout</a>
</nav>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <!-- Title Page-->
    <title> Show | Delet  </title>



    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
</head>

<body>
 
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
 
        <div class="wrapper wrapper--w680">
     <div class="card card-4">
          <div class="card-body">
       <h2 class="title">DELETE  patient</h2>
    <form method="post" action="delet.php">
       <h4>
        donner l'id du patient à supprimer 
        </h4>
     <input class="input--style-4" type="number" name="id" required>
    <button class="btn btn--radius-2 btn--blue" type="submit">DELETE</button>
     </form>
        </div>
            </div>
            <br>
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">List des patient</h2>
                   <?php
     
                                            $servername = 'localhost';
                                            $login_serveur = 'root';
                                            $mdp_serveur = '';
                                            $bd = "gestion_cabinet";
                                      $conn =  mysqli_connect($servername, $login_serveur, $mdp_serveur , $bd);
                                        if(!$conn){
                                                echo"Erreur " ;
                                            }else{
                                                $req="SELECT * FROM patient ";
                                                $resulta=mysqli_query($conn, $req) ;
                                                $ligne =mysqli_fetch_assoc($resulta);
                                                echo "<table border=1>
                                                <tr>
                                                <th> Id</th>
                                                <th> first name</th>
                                                <th> last name</th> 
                                                <th> age </th>
                                                <th> phone </th>
                                                <th> email </th>
                                                <th> gender </th>
                                                <th> maladie </th>
                                                <th> doctor </th>
                                                </tr>";
                     echo "<tr> 
                     <td>".$ligne["id"]."</td>
                     <td>".$ligne["first_name"]."</td>
                     <td>".$ligne["last_name"]."</td>
                     </td><td>".$ligne["age"]."</td>
                     </td><td>".$ligne["phone"]."</td>
                     </td><td>".$ligne["email"]."</td>
                     </td><td>".$ligne["gender"]."</td>
                     </td><td>".$ligne["maladie"]."</td>
                      </td><td>".$ligne["doctor"]."</td>
                    
                     </tr>";
                    while ($ligne =mysqli_fetch_assoc($resulta) ){
                       echo "<tr> 
                     <td>".$ligne["id"]."</td>
                     <td>".$ligne["first_name"]."</td>
                     <td>".$ligne["last_name"]."</td>
                     </td><td>".$ligne["age"]."</td>
                     </td><td>".$ligne["phone"]."</td>
                     </td><td>".$ligne["email"]."</td>
                     </td><td>".$ligne["gender"]."</td>
                     </td><td>".$ligne["maladie"]."</td>
                      </td><td>".$ligne["doctor"]."</td>
                    
                     </tr>";
                    }
                                        }       ?>
                    
                    
                    
                </div>
            </div>
        </div>
        
    </div>

    
    <!-- Jquery JS-->


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->