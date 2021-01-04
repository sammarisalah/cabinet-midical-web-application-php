<!DOCTYPE html>
<html lang="en">
<nav>
<a href="showlist.php">List Patient</a>    
<a href="loginS.php">Logout</a>
</nav>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <!-- Title Page-->
    <title> Home|secretaire</title>



    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">ADD Patient</h2>
                    <form method="POST" action="addpatient.php" >
                        <div class="row row-space">
                            <div class="col-2">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="firstname" required>
                             
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                    <label class="label">Age</label>   
                                        <input class="input--style-4" type="number" name="age"  required>
                            </div>
                          <div class="col-2">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" required>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required>
                            </div>
                            <br>
                            <br>
                          <div class="col-2" >
                              <br><br>
                              <p>Select Sexe</p>
                                    <select name="sexe" size="1">
                                <option value="male">male</option>
                                <option value="female">female</option>
                       
                            </select>
                            </div>
                        </div>
                         <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                            <label class="label">Medecin</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="medecin">
                             		<?php
     
                                            $servername = 'localhost';
                                            $login_serveur = 'root';
                                            $mdp_serveur = '';
                                            $bd = "gestion_cabinet";
                                      $conn =  mysqli_connect($servername, $login_serveur, $mdp_serveur , $bd);
                                        if(!$conn){
                                                echo"Erreur " ;
                                            }else{
                                                $req="SELECT name FROM doctor " ;
                                                $resulta=mysqli_query($conn, $req) ;
                                                 while ($ligne =mysqli_fetch_assoc($resulta) ){
                                                echo " <option value =".$ligne["name"]." >".$ligne["name"]."</option>";
                                            }}
                                ?>
                                                                </select>
                            </div>
                                 </div>
                             </div>
                                 <div class="col-2">
                                    <label class="label">Maladie</label>
                                    <input class="input--style-4" type="text" name="maladie" required>
                            </div>
                        </div>   
                  
                       
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->