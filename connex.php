
<!-- Connexion à la base de donnée : -->


<?php
    $server = 'localhost'; 
    $user = 'root';
    $password = '';
    $bd = 'ecom_db';


    // connexion à la base de donnée : 

    $con = new mysqli($server, $user, $password, $bd);

     // Verifier la connexion : 

        if($con->connect_error) {
            die("Connexion echoué! : " . $con->connect_error);
        } else { echo " connexion reusiié !";}
?>